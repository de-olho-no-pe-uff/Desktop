<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class Logout extends Component
{

    #[On('logout')]
    public function logout(){
        session()->forget('user');

        return redirect()->route('login');
    }


    public function render()
    {
        return view('livewire.components.logout');
    }
}
