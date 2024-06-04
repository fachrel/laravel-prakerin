<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use App\Models\Teacher;
use Livewire\Attributes\Validate;

class TeacherForm extends Form
{
    #[Validate('required')]
    public $phone;
    #[Validate('required')]
    public $NIP;
    public $user_id;
    public $major_id;

    public function save()
    {
        $this->validate();
        Teacher::create([
            'user_id' => (int) $this->user_id,
            'major_id' => (int) $this->major_id,
            'phone' => $this->phone,
            'NIP' => $this->NIP,
        ]);

        $user = User::find($this->user_id);
        $user->assignRole('teacher');

        $this->reset();
    }

    public function update($userId, $studentId)
    {
        $this->validate();

        $teacher = Teacher::findOrFail($studentId);
        $teacher->update([
            'user_id' => (int) $userId,
            'major_id' => (int) $this->major_id,
            'phone' => $this->phone,
            'NIP' => $this->NIP,
        ]);

        $this->reset();
    }
}
