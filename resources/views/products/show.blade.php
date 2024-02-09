@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card mt-3 p-3">
        {{-- <div class="col-sm-4 mt-4">
            <div class="card p-4"> --}}
                <h1>Product Details</h1>
                <p><strong>Name :</strong> {{$product->name}}</strong></p>
                <p><strong>Description :</strong> {{$product->description}}</strong></p>
                <img src="/products/{{$product->image}}" class="rounded-circle-center" width="50%" height="30%" />
            </div>
        </div>
    </div>
</div>
@endsection