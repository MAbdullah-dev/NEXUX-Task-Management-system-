<?php

namespace App\Livewire\Inc;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function SignOut()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.inc.sidebar');
    }

}
