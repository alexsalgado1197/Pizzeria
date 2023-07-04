@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
<div class="flex-center position-ref full-height">
<div class="content">
    <div class="title m-b-md">
        Ordenes de pizzas<br />
    </div>
    
    <!-- <p>{{$nombre}}</p>
    <p>{{$edad}}</p> -->
    
    <!-- @for ($i = 0; $i < 5; $i++)
    <p>El valor de i es {{$i}}</p>
    @endfor -->

    <!-- @for ($i = 0; $i < count($pizzas); $i++)
    <p>{{$pizzas[$i]['type']}}</p>
    @endfor -->

    @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">  
      <h4><a href="/pizzas/{{ $pizza->id }}"> {{ $pizza -> name }} </a> </h4> 
      
    </div>
    @endforeach

</div>
</div>

</div>



@endsection 