<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pizza;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();  
        //$pizzas = Pizza::where('type', 'hawaiana')->get();
        $pizzas = Pizza::latest()->get();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'nombre' => request('nombre'),
            'edad' => request('edad')
        ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza ]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');

        //return request('toppings');
        $pizza->save();

        return redirect('/')->with('mssg', 'Gracias por tu orden');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
