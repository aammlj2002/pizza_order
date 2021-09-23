<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PizzaController::class, "index"])->name("home");
Route::post("/", [PizzaController::class, "insert"])->name("insert");

Route::get('/pizzas', [PizzaController::class, "pizzas"])->name("pizzas");

Route::get("/pizzas/{id}", [PizzaController::class, "delete"])->name("delete");

Route::get("/pizzas/edit/{id}", [PizzaController::class, "edit"])->name("edit");
Route::post("/pizzas/update/{id}", [PizzaController::class, "update"])->name("update");
