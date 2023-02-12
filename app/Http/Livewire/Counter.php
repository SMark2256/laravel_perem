<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    
    public $max;
    public $count = 0;
    public $running = false;

   
    public function increment()
    {

        if ($this->count < $this->max) {
            $this->count++;
        }else{
            $this->count = 0;
        }


    }

    public function stop()
    {
        $this->running = false;
    }

    public function render()
    {
        return view('livewire.counter', [
            'count' => $this->count
        ]);
    }
}