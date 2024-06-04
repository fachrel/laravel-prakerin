<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Major;
use App\Models\Teacher;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\UserForm;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\TeacherForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

#[Layout('layouts.app')]
class TeachersPage extends Component
{
    use WithPagination;
    public $currentPage = 1;
    public $totalPage = 3;
    public $search;
    public UserForm $userForm;
    public TeacherForm $teacherForm;

    #[Validate('required|min:8|max:30')]
    public $confirmPassword;

    #[Validate('required|min:8|max:30')]
    public $oldPassword;

    #[Validate('required|min:8|max:30')]
    public $newPassword;

    public $teacherId;
    public $deleteId;

    public function save()
    {
        if (!$this->teacherId) {
            if($this->userForm->password == $this->confirmPassword) {
                $this->userForm->save();
                $latestUser = User::latest()->first();
                $this->teacherForm->user_id = $latestUser->id;
                $this->teacherForm->save();
                $this->render();
                $this->dispatch('close-modal');
                flash()->addSuccess('Siswa berhasil ditambahkan.');
            }else{
                throw ValidationException::withMessages([
                    'confirmPassword' => 'Password tidak sama.'
                ]);
            }
        }else{
            $user = Teacher::find($this->teacherId)->user;
            $userId = $user->id;
            if (Auth::attempt(['username' => $user->username, 'password'=> $this->oldPassword])) {
                $this->userForm->password = $this->newPassword;
                $this->userForm->update($userId);
                $this->teacherForm->update($userId, $this->teacherId);
                $this->render();
                $this->dispatch('close-modal');
                flash()->addSuccess('Siswa berhasil diperbarui.');
            }else{
                throw ValidationException::withMessages([
                    'oldPassword' => 'Password salah.'
                ]);
            }
        }
    }

    #[On('edit-teacher')]
    public function update($id)
    {
        $this->teacherId = $id;
        $teacher = Teacher::findOrFail($id);
        $this->userForm->fill([
            'name' => $teacher->user->name,
            'username' => $teacher->user->username,
            'email' => $teacher->user->email,
            // 'password' => $user->password,
        ]);

        $this->teacherForm->fill([
            'phone' => $teacher->phone,
            'NIP' => $teacher->NIP,
            'major_id' => $teacher->major_id,
            // 'password' => $user->password,
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
        $teacher = Teacher::find($this->deleteId);

        if ($teacher) {
            $teacher->delete();
            $teacher->user()->delete();
            $this->dispatch('render-users');
            $this->dispatch('close-modal');

            flash()->addSuccess('Guru berhasil dihapus.');
        } else {
            $this->dispatch('close-modal');
            flash()->addError('Guru tidak ditemukan.');
        }
    }

    #[On('close-modal')]
    public function dissmiss()
    {
        $this->userForm->reset();
        $this->teacherForm->reset();
        $this->reset('teacherId');
        $this->reset('currentPage');
        $this->reset('confirmPassword');
        $this->reset('newPassword');
        $this->reset('oldPassword');
        $this->resetValidation();
    }

    public function increment()
    {
        if ($this->currentPage < $this->totalPage) {
            $this->currentPage++;
        }
    }

    public function decrement()
    {
        if ($this->currentPage > 1) {
            $this->currentPage--;
        }
    }

    public function render()
    {
        return view('livewire.teachers-page', [
            'teachers' => Teacher::search($this->search)->paginate(10),
            'majors' => Major::all(),
        ]);
    }
}
