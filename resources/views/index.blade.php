@extends('layout/layout')
@section('content')
    

<div class="container">
    <h1 class="grey-text mt-4">Welcome from my Pizza Project</h1>
    @if (Session("success"))
        <div class="alert alert-success">
            {{Session("success")}}
        </div>   
    @endif
    <div class="card mt-3">
        <div class="card-header bg-primary">
            <h2 class="text-white">Pizza Order Form</h2>
        </div>
        <form action="{{route('insert')}}" method="POST">
            @csrf
            <div class="card-body">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control mb-3" name="username"/>
                @error('username')
                    <p class="text-danger">{{$message}}</p>
                @enderror
    
                <label class="form-label">Pizza Name</label>
                <input type="text" class="form-control mb-3" name="pizza_name"/>
                @error('pizza_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
    
                <label class="form-label">Toppings</label>
                <input type="text" class="form-control mb-3" name="toppings"/>
                @error('toppings')
                    <p class="text-danger">{{$message}}</p>
                @enderror
    
                <label class="form-label">Sauce</label>
                <input type="text" class="form-control mb-3" name="sauce"/>
                @error('sauce')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                <label class="form-label">Price</label>
                <input type="text" class="form-control mb-3" name="price"/>
                @error('price')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Order</button>
        </form>
    </div>
</div>


@endsection