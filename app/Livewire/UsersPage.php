<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

#[Layout('layouts.app')]
class UsersPage extends Component
{
    use WithPagination;

    public $search;
    public UserForm $form;
    public $modalHeight;
    public $userId;
    public $deleteId;

    #[Validate('required|min:8|max:30')]
    public $confirmPassword;

    #[Validate('required|min:8|max:30')]
    public $oldPassword;

    #[Validate('required|min:8|max:30')]
    public $newPassword;
    public function rules()
    {
        return [
            'confirmPassword' => 'required|min:8|max:30',
        ];
    }
    public function save()
    {

        if ($this->userId) {
            $user = User::find($this->userId);
            if (Auth::attempt(['username' => $user->username, 'password'=> $this->oldPassword])) {
                $this->form->password = $this->newPassword;
                $this->form->update($this->userId);
                $this->dispatch('render-users');
                $this->dispatch('close-modal');
                flash()->addSuccess('User berhasil diperbarui.');
            }else{
                throw ValidationException::withMessages([
                    'oldPassword' => 'Password salah.'
                ]);
            }
        }else{
            if($this->form->password == $this->confirmPassword) {
                $this->form->save();
                $user = User::where('email', $this->form->email)->first();
                if ($user) {
                    $user->assignRole('admin');
                    $this->form->reset();
                }
                $this->dispatch('render-users');
                $this->dispatch('close-modal');
                flash()->addSuccess('User berhasil ditambahkan.');
            }else{
                throw ValidationException::withMessages([
                    'confirmPassword' => 'Password tidak sama.'
                ]);
            }
        }
    }

    #[On('edit-user')]
    public function update($id)
    {
        $this->userId = $id;
        $user = User::findOrFail($id);
        $this->form->fill([
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
        ]);

    }

    #[On('delete')]
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    #[On('confirm-delete')]
    public function delete()
    {
        $user = User::find($this->deleteId);

        if ($user) {
            $user->delete();
            $this->dispatch('render-users');
            $this->dispatch('close-modal');
            flash()->addSuccess('User berhasil dihapus.');
        } else {
            $this->dispatch('close-modal');
            flash()->addError('User tidak ditemukan.');
        }
    }

    #[On('close-modal')]
    public function dissmiss()
    {
        $this->form->reset();
        $this->reset('userId');
        $this->reset('oldPassword');
        $this->reset('confirmPassword');
        $this->reset('newPassword');
        $this->resetValidation();
    }

    #[On('render-users')]
    public function render()
    {
        return view('livewire.users-page', [
            'users' => User::search($this->search)->paginate(10),
        ]);
    }
}
