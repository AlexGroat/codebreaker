<?php

namespace App\Livewire;

use Livewire\Component;

class CreateCode extends Component
{
    public int $count = 0;

    public function render()
    {
        return view('livewire.create-code');
    }
}
