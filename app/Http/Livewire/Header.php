<?php

namespace App\Http\Livewire;

use Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Http\Controllers\AuthController;

class Header extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.header', ['user' => $user]);
    }
}
