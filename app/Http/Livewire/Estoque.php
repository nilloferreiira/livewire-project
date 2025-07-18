<?php

namespace App\Http\Livewire;

use App\Models\Fruit;
use Livewire\Component;

class Estoque extends Component
{

    public Fruit $fruit;

    public function mount()
    {
        $this->fruit = Fruit::first();
    }

    public function increment() {
        $this->fruit->quantity += 1;
        $this->fruit->save();

        $this->fruit = $this->fruit->refresh();
        $this->emit('fruitUpdated', $this->fruit->quantity);
    }

    public function decrement() {
        if ($this->fruit->quantity > 0) {
            $this->fruit->quantity -= 1;
            $this->fruit->save();
            
            $this->fruit = $this->fruit->refresh();
            $this->emit('fruitUpdated', $this->fruit->quantity);
        }
    }

    public function render()
    {
        return view('livewire.estoque', ['fruit' => $this->fruit]);
    }
}
