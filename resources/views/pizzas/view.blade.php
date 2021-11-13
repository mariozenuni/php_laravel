
@extends('layouts.layout')

@section('content')

        <p>Pizza List</p>

       @foreach($pizzas as $pizza)
            <div>
            <a href="/show/{{$pizza->id}}">{{$pizza->name}}  </a>
            </div>   
            <div>        
              {{$pizza->type}} 
              </div>   
              </div>  
              {{$pizza->base}}
              
                </div>
               <div>
               @for($i=0; $i< count(json_decode($pizza->toppings));$i++)
                {{json_decode($pizza->toppings)[$i]}}
                </div>
                @endfor
     @endforeach


     @endsection