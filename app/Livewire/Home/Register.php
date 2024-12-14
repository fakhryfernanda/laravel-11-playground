<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Register extends Component
{
    public $step = 1;

    public function nextStep()
    {
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function render()
    {
        return view('livewire.home.register');
    }
}
