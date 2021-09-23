<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index()
    {
        return view("index");
    }
    function insert(request $req)
    {
        //validation
        $validation = $req->validate([
            "username" => "required",
            "pizza_name" => "required",
            "toppings" => "required",
            "sauce" => "required",
            "price" => "required",
        ]);
        if ($validation) {
            //insert data to database
            $pizza = new Pizza();
            $pizza->username = $req->username;
            $pizza->pizza_name = $req->pizza_name;
            $pizza->toppings = $req->toppings;
            $pizza->sauce = $req->sauce;
            $pizza->price = $req->price;
            $pizza->save();
            return back()->with("success", "Thank you for your order");
        } else {
            return back()->withErrors($validation);
        }
    }
    function pizzas()
    {

        // fake data (for test)
        // $pizzas = [
        //     ["id" => 1, "username" => "aung", "pizza_name" => "chicken", "toppings" => "salad", "sauce" => "tomato", "price" => 9.99],
        //     ["id" => 2, "username" => "mg", "pizza_name" => "chicken", "toppings" => "salad", "sauce" => "tomato", "price" => 9.99],
        //     ["id" => 3, "username" => "ma", "pizza_name" => "chicken", "toppings" => "salad", "sauce" => "tomato", "price" => 9.99],
        // ];

        //select all data form pizza table
        $pizzas = Pizza::all();

        //send data to blade file
        return view('pizzas', ["pizzas" => $pizzas]);
        //           route        data with array
    }
    function delete($id)
    {
        //find data by id
        $delete_pizza_data = Pizza::find($id);
        //delete data
        $delete_pizza_data->delete();
        return back()->with("deleted", "$delete_pizza_data->username Order is Deleted");
    }
    function edit($id)
    {
        $pizza = Pizza::find($id);
        return view("edit", ["pizza" => $pizza]);
    }
    function update($id, Request $req)
    {
        $pizza = Pizza::find($id);
        $pizza->username = $req->username;
        $pizza->pizza_name = $req->pizza_name;
        $pizza->toppings = $req->toppings;
        $pizza->sauce = $req->sauce;
        $pizza->price = $req->price;
        $pizza->save();
        return redirect()->route("pizzas");
    }
}
