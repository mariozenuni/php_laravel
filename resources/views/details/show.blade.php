@extends('layouts.layout')

@section('content')

        <p>Details</p>
       
            <div>
            {{$pizzas->name}}  
            </div>   
            <div>        
              {{$pizzas->type}} 
              </div>   
              </div>  
              {{$pizzas->base}}
                </div>

                <div>
              
                <ul>
                @for($i=0;$i < count(json_decode($pizzas->toppings));$i++)
                <li>{{json_decode($pizzas->toppings)[$i]}}</li>
                @endfor
                </ul>
              
                </div>


                <form action="/show/{{$pizzas->id}}" method="post">

                @csrf
                @method('DELETE')

                <p class='mssg'>{{session('mssg')}}</p>
                
                <input  type="submit" value="Order completed">
                     
                </form><br>


                <a href="/view">Back to the view</a>

    </body>
</html>
@endsection