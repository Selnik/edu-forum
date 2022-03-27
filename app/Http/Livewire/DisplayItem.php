<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;

class DisplayItem extends Component
{
    public $editMode = false;
    public $canEdit = false;
    public function changeToEdit()
    {
        $this->editMode = true;
    }
    public function changeToNotEdit()
    {
        $this->editMode = false;
    }
    public function mount($item)
    {
        $this->item = $item;
        $this->model = mb_strtolower(class_basename(get_class($item)));

    }
    public function render()
    {


        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->isAdmin)
            {
                $this->canEdit = true;
            }
            if ($this->model != 'topic')
            {
                if ($this->item->user()->get()->first() == $user)
                {
                    $this->canEdit = true;
                }
            }
        }

        return view('livewire.display-item');
    }
}
