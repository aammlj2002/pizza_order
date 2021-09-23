@extends('layout/layout')
@section('content')

<div class="container">
    @if (Session("deleted"))
        <div class="alert alert-success mt-3">
            {{Session("deleted")}} 
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Username</th>
                <th>Pizza Name</th>
                <th>Toppings</th>
                <th>Sauce</th>
                <th>Price</th>
                <th>Edit Order</th>
                <th>Complete Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
            <tr>
                <td>{{$pizza["id"]}}</td>
                <td>{{$pizza["username"]}}</td>
                <td>{{$pizza["pizza_name"]}}</td>
                <td>{{$pizza["toppings"]}}</td>
                <td>{{$pizza["sauce"]}}</td>
                <td>${{$pizza["price"]}}</td>
                <td><a href="{{route("edit", $pizza["id"])}}" class="btn btn-sm btn-warning">Edit</a></td>
                <td><a href="{{route("delete", $pizza["id"])}}" class="btn btn-sm btn-success">Complete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
