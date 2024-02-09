@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="text-content-right">
            <a href="products/create" class="btn btn-dark mt-2">New Product</a>  
            {{-- <a href="{{ route('export.products') }}" class="btn btn-primary mt-2">Export Products</a> --}}
        </div>
        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><a href="products/{{$product->id}}/show" class="text-dark">{{$product->name}}</a></td>
                    <td><img src="products/{{$product->image}}" class="rounded-circle" width="50" height="50"></td>
                    <td><a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                        <form method="POST" class="d-inline" action="products/{{$product->id}}/delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </thead>
        </div>
@endsection