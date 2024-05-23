<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class LoginPage extends Component
{
    #[Rule('required')]
    public string $username = "";
    #[Rule('required')]
    public string $password = "";
    public function login()
    {

        if(Auth::attempt($this->validate())){
            // return redirect()->route('admin');
            return $this->redirect('/', navigate: true);

        }
    }
    public function render()
    {
        return view('livewire.login-page');
    }
}
