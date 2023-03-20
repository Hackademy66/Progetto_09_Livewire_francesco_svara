<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // Attributi e Proprietà
    public $value = 0;

    // Actions -->metodi riferiti alla classe php
    public function increment(){
        $this->value++;
    }

    public function incrementByNumber($number){
        $this->value += $number;
    }

    public function decrement(){
        $this->value--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
