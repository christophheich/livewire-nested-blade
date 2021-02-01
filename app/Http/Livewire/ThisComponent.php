<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThisComponent extends Component
{
    public bool $check = true;

    public function render()
    {
        return view('livewire.this-component');
    }
}
