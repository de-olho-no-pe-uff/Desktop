<?php

namespace App\Livewire\User;

use Livewire\Component;

class Register extends Component
{

    public $email;
    public $password;

    public function register(){

        $auth = app('firebase.auth');

        $user = $auth->createUser([
            'email' => $this->email,
            'password' => $this->password
        ]);

        return redirect()->route('login');

    }

    public function render()
    {
        return view('livewire.user.register');
    }
}
