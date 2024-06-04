<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use App\Models\Student;
use Livewire\Attributes\Validate;

class StudentForm extends Form
{
    #[Validate('required|min:4|max:4')]
    public $NIS;

    #[Validate('required')]
    public $NISN;

    #[Validate('required')]
    public $enrollment_year;

    #[Validate('required')]
    public $group;
    #[Validate('required')]
    public $gender;

    #[Validate('required')]
    public $major_id;

    public $user_id;

    public function save()
    {
        $this->validate();
        Student::create([
            'user_id' => (int) $this->user_id,
            'major_id' => (int) $this->major_id,
            'NIS' => $this->NIS,
            'NISN' => $this->NISN,
            'enrollment_year' => $this->enrollment_year,
            'group' => $this->group,
            'gender' => $this->gender,
        ]);

        $user = User::find($this->user_id);
        $user->assignRole('student');

        $this->reset();
    }

    public function update($userId, $studentId)
    {
        $this->validate();

        $student = Student::findOrFail($studentId);
        $student->update([
            'user_id' => (int) $userId,
            'major_id' => (int) $this->major_id,
            'NIS' => $this->NIS,
            'NISN' => $this->NISN,
            'enrollment_year' => $this->enrollment_year,
            'group' => $this->group,
            'gender' => $this->gender,

        ]);

        $this->reset();
    }
}
