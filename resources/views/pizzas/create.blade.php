@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Ordena una nueva pizza</h1>
    <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name">
    <label for="type">Escoge tipo de pizza:</label>
    <select name="type" id="type">
        <option value="hawaiana">hawaiana</option>
        <option value="jamon y queso">jamon y queso</option>
        <option value="dietetica">dietetica</option>
    </select>

    <label for="type">Escoge base de pizza:</label>
    <select name="base" id="base">
        <option value="queso">queso</option>
        <option value="jamon crujiente">queso crujiente</option>
        <option value="chispas">chispas</option>
    </select>
    
    <label for="type">Precio:</label>
    <select name="price" id="price">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
    </select>

    <fieldset>
        <label>Extra toppings: </label>
        <input type="checkbox" name="toppings[]" value="mushrooms">Hongos<br>
        <input type="checkbox" name="toppings[]" value="peppers">Pimientos<br>
        <input type="checkbox" name="toppings[]" value="garlic">Ajo<br>
        <input type="checkbox" name="toppings[]" value="olives">Aceitunas<br>
    </fieldset>

    <input type="submit" value="Ordenar Pizza">
        
    </form>
</div>

@endsection 