<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')] 
class Counter extends Component
{
    public $title = 'Counter';
    public $counter = 0;
    
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment() {
        $this->counter++;
    }

    public function decrement() {
        $this->counter--;
    }
}
