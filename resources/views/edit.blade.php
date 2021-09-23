@extends('layout/layout')
@section('content')
    
<div class="container">
    <h1 class="grey-text mt-4">Welcome from my Pizza Project</h1>
    <div class="card mt-3">
        <div class="card-header bg-primary">
            <h2 class="text-white">Pizza Edit Form</h2>
        </div>
        <form action="{{route('update', $pizza->id)}}" method="POST">
            @csrf
            <div class="card-body">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control mb-3" name="username" value="{{$pizza->username}}"/>
                @error('username')
                    <p class="text-danger">{{$message}}</p>
                @enderror
    
                <label class="form-label">Pizza Name</label>
                <input type="text" class="form-control mb-3" name="pizza_name" value="{{$pizza->pizza_name}}"/>
                @error('pizza_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
    
                <label class="form-label">Toppings</label>
                <input type="text" class="form-control mb-3" name="toppings" value="{{$pizza->toppings}}"/>
                @error('toppings')
                    <p class="text-danger">{{$message}}</p>
                @enderror
    
                <label class="form-label">Sauce</label>
                <input type="text" class="form-control mb-3" name="sauce" value="{{$pizza->sauce}}"/>
                @error('sauce')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                <label class="form-label">Price</label>
                <input type="text" class="form-control mb-3" name="price" value="{{$pizza->price}}"/>
                @error('price')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
    </div>
</div>
@endsection