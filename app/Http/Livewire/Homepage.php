<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Topic;
class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage', ['topics' => Topic::all()]);
    }
}
