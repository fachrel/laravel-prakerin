<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Validate;

class UserForm extends Form
{
    #[Validate('required|min:3|max:100')]
    public $name;

    #[Validate('required|min:3|max:20|unique:users')]
    public $username;

    #[Validate('required|email|unique:users')]
    public $email;

    #[Validate('required|min:8|max:30')]
    public $password;

    public function save()
    {
        $this->validate();
        User::create($this->all());
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        $user->update($this->all());

        $this->reset();
    }
}
