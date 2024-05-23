<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class UserForm extends Form
{
    #[Rule('required|min:3|max:100')]
    public $name;

    #[Rule('required|min:3|max:20')]
    public $username;

    #[Rule('required|email')]
    public $email;

    #[Rule('required|min:8|max:30')]
    public $password;

    public function save()
    {
        $this->validate();
        User::create($this->all());
        $this->reset();

    }

    public function update($id)
    {
        $this->validate();

        $category = User::findOrFail($id);
        $category->update($this->all());

        $this->reset();
    }
}
