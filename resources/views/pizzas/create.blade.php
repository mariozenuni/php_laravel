@extends('layouts.layout')

@section('content')

    <h1>Order a Pizza</h1>
    <form action="/pizzas" method="post">
    
    @csrf

    <div class="form-group">
      <lable for="name">Name</lable>
    <input type="text" name="name" placeholder="Enter your name"></input><br>
    <lable for="email">Email</lable>
    <input type="email" name="email" placeholder="Enter your email"></input><br>
    <label for="selectyourpizza">Select your Pizza</label>
    <select class="form-control" id="name" name="type"><br>
      <option>Margherita</option>
      <option>Diavola</option>
      <option>Marinara</option>
      <option>Pizza al cocco</option> 
      <option>Pizza al ..</option>
    </select><br>
    <label for="base">Select your base</label>
    <select class="form-control" id="base" name="base"><br>
      <option>Farina</option>
      <option>Farina senza lievito</option>
      <option>Farina senza farina</option>
    </select><br>
    <label >Extra toppings:</label>
    <input type="checkbox" name="toppings[]" value="garlic">Garlic <br/>
    <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
    <input type="checkbox" name="toppings[]" value="olivs">Olivs <br/>
   </div> 
 <div>
  <button type="submit" value="Order Pizza">Order Pizza</button>
  </div>
  
  
    </form>

@endsection