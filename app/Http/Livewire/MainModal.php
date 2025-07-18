<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainModal extends Component
{
    public string $state = '';

    public function setState($state) {
        $this->state = $state;
    }

    public function render()
    {
        return view('livewire.main-modal');
    }
}
