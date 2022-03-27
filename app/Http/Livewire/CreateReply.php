<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateReply extends Component
{
    public function mount($thread)
    {
        $this->thread = $thread;
    }
    public function render()
    {
        return view('livewire.create-reply');
    }
}
