<?php

namespace App\Http\Livewire;

use App\Models\Reply;
use Livewire\Component;

class CreateReply extends Component
{
    public $problemsName = "Jméno je vyžadováno. ";
    public $problemsDescription = "Popis je vyžadován. ";
    public $name;
    public $description;
    public function check()
    {
        $this->problemsName = '';
        $this->problemsDescription = '';
        if(strlen($this->name) > 0)
        {
            if(strlen($this->name) < 2)
            {
                $this->problemsName .= 'Jméno musí mít alespoň dva znaky. ';
            }
            if(strlen($this->name) > 100)
            {
                $this->problemsName .= 'Jméno nesmí mít více než 100 znaků. ';
            }
            if(Reply::where('name', $this->name)->exists())
            {
                $this->problemsName .= 'Toto jméno je již zabrané. ';
            }
        }
        else
        {
            $this->problemsName .= 'Jméno je vyžadováno. ';
        }
        if(strlen($this->description) > 0)
        {
            if(strlen($this->description) < 2)
            {
                $this->problemsDescription .= 'Popis musí mít alespoň dva znaky. ';
            }
            if(strlen($this->name) > 300)
            {
                $this->problemsDescription .= 'Popis nesmí mít více než 300 znaků. ';
            }
        }
        else
        {
            $this->problemsDescription .= 'Popis je vyžadován. ';
        }
    }
    public function mount($thread)
    {
        $this->thread = $thread;
    }
    public function render()
    {
        return view('livewire.create-reply');
    }
}
