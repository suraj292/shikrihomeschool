<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    //nav icon selected add class =  current-menu-item
    public function render()
    {
        return view('livewire.components.header');
    }

    public function mount()
    {

    }
}
