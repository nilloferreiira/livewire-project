<?php

namespace App\Http\Livewire;

use App\Models\Fruit;
use Livewire\Component;

class StockList extends Component
{
    /** @var Collection<int, \App\Models\Fruit> */
    public $fruits;

    protected $listeners = ['fruitCreated' => 'reloadFruits'];

    public function mount()
    {
        $this->fruits = Fruit::all();
    }

    //? redundante: talvez possa chamar o mount dnv
    public function reloadFruits() {
        $this->fruits = Fruit::all();
    }

    public function increment($id)
    {
        $fruit = Fruit::find($id);
        if (!$fruit) return;
        
        $fruit->quantity += 1;
        $fruit->save();

        $this->reloadFruits();
    }

    public function decrement($id)
    {
        $fruit = Fruit::find($id);
        if (!$fruit || $fruit->quantity <= 0) return;

        $fruit->quantity -= 1;
        $fruit->save();
    
        $this->reloadFruits();

    }

    public function render()
    {
        return view('livewire.stock-list');
    }
}
