<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class LoginPage extends Component
{
    #[Rule('required')]
    public string $username = "";
    #[Rule('required|min:8')]
    public string $password = "";
    public function login()
    {
        if(Auth::attempt($this->validate())){
            // return redirect()->route('admin');
            return $this->redirect('/', navigate: true);
        }else{
            flash()->addError('Username atau password yang diinput salah.');
        }

        throw ValidationException::withMessages([
            'username' => 'Username atau password yang diinput salah.'
        ]);

    }
    public function render()
    {
        return view('livewire.login-page');
    }
}
