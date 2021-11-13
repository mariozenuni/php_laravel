<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Pizza;
use Exception;

class PizzaController extends Controller
{


    public function index(){

        return view('pizzas.index');

        
    }

   public function create(){
    
            return view('pizzas.create');
   }


   public function store(){

       $pizza=new Pizza;

       $pizza->name=request('name');
      
       $pizza->email=request('email');

       $pizza->type=request('type');

       $pizza->base=request('base');
      $pizza->toppings= json_encode(request('toppings'));

 

       $pizza->save();
        
        return redirect('/')->with('mssg','Thanks for you order');
    }

    public function show($id){
         $pizzas=Pizza::all()->find($id);

        return view('details.show',['pizzas'=>$pizzas]);
    }
    public function view(){

        $pizzas=Pizza::all();

       return view('pizzas.view',['pizzas'=>$pizzas]);
   }

   public function destroy($id){

    $pizzas=Pizza::all()->find($id);
     $pizzas->delete();

  return redirect('/')->with('mssg','Order completed');
}


}
