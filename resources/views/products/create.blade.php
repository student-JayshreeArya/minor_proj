@extends('layouts.app')

@section('main') 
{{-- main --}}

    <div class="container">
        <div class="row justify-content-center"> <!-- Fix typo here -->
            <div class="col-sm-4">
                <div class="card mt-3 p-3">
                    <h1>Create Product</h1>
                    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">   
                        {{--  "{{ route('products.store') }}"--}}
                        {{-- submits file in the format of string --}}
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="text-danger"> {{ $errors->first('name') }} </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="4" class="form-control" required>{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger"> {{ $errors->first('description') }} </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" value="{{ old('image') }}" required>
                            @if ($errors->has('image'))
                                <span class="text-danger"> {{ $errors->first('image') }} </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection

    