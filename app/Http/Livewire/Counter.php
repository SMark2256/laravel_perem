<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $max;
    
    public function increment(){
        if ($this->count < $this->max) {
            $this->count++;
        }else{
            $this->count = 0;
        }
    }

    public function stop()
    {
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}