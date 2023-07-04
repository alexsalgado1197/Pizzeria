@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
<h1>Ordenar para {{ $pizza->name }}</h1>

<p class="type"> Tipo - {{ $pizza->type }} </p>
<p class="base"> Base - {{ $pizza->base }}</p>
<p class="toppings">Extra toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
             <li>{{ $topping }}</li>
         @endforeach    
    </ul>

<form action="/pizzas/{{ $pizza->id }}" method="POST">
@csrf
@method('DELETE')
    <button>Completar orden</button>
</form>
</div>

<a href="/pizzas" class="back">Regresar a pizzas</a>

@endsection 