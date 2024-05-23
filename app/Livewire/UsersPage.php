<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\UserForm;

#[Layout('layouts.app')]
class UsersPage extends Component
{
    public UserForm $form;
    public $userId;
    public $deleteId;

    public function save()
    {
        // dd('masuk');
        // $validated = $this->validateOnly('form');

        if ($this->userId) {
            $this->form->update($this->userId);
            $this->dispatch('render-users');
            $this->dispatch('close-modal');

            // flash()->addSuccess('User berhasil diperbarui.');
        } else {
            $this->form->save();
            $this->dispatch('render-users');
            $this->dispatch('close-modal');

            // flash()->addSuccess('User berhasil ditambahkan.');
        }
    }
    #[On('render-users')]
    public function render()
    {
        return view('livewire.users-page');
    }
}
