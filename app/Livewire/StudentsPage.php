<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Major;
use App\Models\Student;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\UserForm;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\StudentForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

#[Layout('layouts.app')]
class StudentsPage extends Component
{
    use WithPagination;

    public $currentPage = 1;
    public $totalPage = 3;
    public $search;
    public UserForm $form;
    public StudentForm $studentForm;
    public $modalHeight;
    public $studentId;
    public $deleteId;

    #[Validate('required|min:8|max:30')]
    public $confirmPassword;

    #[Validate('required|min:8|max:30')]
    public $oldPassword;

    #[Validate('required|min:8|max:30')]
    public $newPassword;

    public function save()
    {
        if (!$this->studentId) {
            if($this->form->password == $this->confirmPassword) {
                // dd($this->form);
                $this->form->save();
                $latestUser = User::latest()->first();
                $this->studentForm->user_id = $latestUser->id;

                $this->studentForm->save();
                $this->render();
                $this->dispatch('close-modal');
                flash()->addSuccess('Siswa berhasil ditambahkan.');
            }else{
                throw ValidationException::withMessages([
                    'confirmPassword' => 'Password tidak sama.'
                ]);
            }
        }else{
            $user = Student::find($this->studentId)->user;
            $userId = $user->id;
            if (Auth::attempt(['username' => $user->username, 'password'=> $this->oldPassword])) {
                $this->form->password = $this->newPassword;
                $this->form->update($userId);
                $this->studentForm->update($userId, $this->studentId);
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

    #[On('edit-student')]
    public function update($id)
    {
        $this->studentId = $id;
        $student = Student::findOrFail($id);
        // dd($student);
        $this->form->fill([
            'name' => $student->user->name,
            'username' => $student->user->username,
            'email' => $student->user->email,
            // 'password' => $user->password,
        ]);

        $this->studentForm->fill([
            'NIS' => $student->NIS,
            'NISN' => $student->NISN,
            'enrollment_year' => $student->enrollment_year,
            'group' => $student->group,
            'gender' => $student->gender,
            'user_id' => $student->user_id,
            'major_id' => $student->major_id,
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
        $student = Student::find($this->deleteId);

        if ($student) {
            $student->delete();
            $student->user()->delete();
            $this->dispatch('render-users');
            $this->dispatch('close-modal');

            flash()->addSuccess('Siswa berhasil dihapus.');
        } else {
            $this->dispatch('close-modal');
            flash()->addError('Siswa tidak ditemukan.');
        }
    }

    #[On('close-modal')]
    public function dissmiss()
    {
        $this->form->reset();
        $this->studentForm->reset();
        $this->reset('studentId');
        $this->reset('currentPage');
        $this->reset('confirmPassword');
        $this->reset('newPassword');
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
        return view('livewire.students-page', [
            'students' => Student::search($this->search)->paginate(10),
            'majors' => Major::all(),
        ]);
    }
}
