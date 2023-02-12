<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Winners extends Component
{
    public $winnerslist = array();
    
    public function render()
    {
        return view('livewire.winners');
    }
}