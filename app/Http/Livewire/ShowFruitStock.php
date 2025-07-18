<?php

namespace App\Http\Livewire;

use App\Models\Fruit;
use Livewire\Component;

class ShowFruitStock extends Component
{
    /** @var Fruit */
    public $fruits = [];

    protected $listeners = ['fruitUpdated' => 'updateQuantity'];

    public function mount($quantity) {
        $this->quantity = $quantity;
    }

    public function updateQuantity($newQuantity) {
        $this->quantity = $newQuantity;
    }

    public function render()
    {
        return view('livewire.show-fruit-stock', ['quantity' => $this->quantity]);
    }
}
