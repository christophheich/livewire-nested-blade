<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PassingComponent extends Component
{
    public bool $check = true;

    public function render()
    {
        return view('livewire.passing-component');
    }
}
