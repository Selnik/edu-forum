<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateThread extends Component
{
    public function mount($topic)
    {
        $this->topic = $topic;
    }
    public function render()
    {
        return view('livewire.create-thread');
    }
}
