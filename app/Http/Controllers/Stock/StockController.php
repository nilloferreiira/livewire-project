<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Models\Fruit;
use Illuminate\Http\Request;

class StockController extends Controller
{

    public function index() {
        return view('stock.index');
    }

    public function store(Request $request) {
        $req = $request->validate([
            'name' => 'string|required',
            'quantity' => 'numeric|nullable'
        ]);

        $exits = Fruit::where('name', $req['name'])->exists();

        if($exits) {
        return json_encode([
            'status' => 400,
            'message' => 'Essa fruita já esta cadastrada!'
        ]);
        }
        Fruit::create([
            'name' => $req['name'],
            'quantity' => $req['quantity'] ?? 0,
        ]);


        return json_encode([
            'status' => 200,
            'message' => 'Fruta criada com sucesso!'
        ]);
    }
}
