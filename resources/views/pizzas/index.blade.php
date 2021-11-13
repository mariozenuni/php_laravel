@extends('layouts.layout')

@section('content')
    


    <p class='mssg'>{{session('mssg')}}</p>

<a href="/pizzas/create">Click here to make an order</a><br><br>
<a href="/view">Click here to view your orders</a>

@endsection