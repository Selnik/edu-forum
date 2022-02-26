<?php

namespace App\Http\Livewire;

use Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Header extends Component
{
    public function logout(){
      return redirect()->to('/login');
    }
    public function render()
    {
        $user = Auth::user();
        return view('livewire.header', ['user' => $user]);
    }
}
