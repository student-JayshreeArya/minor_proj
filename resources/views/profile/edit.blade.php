@extends('layouts.app')

@section('main')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="card mt-3 p-3">
        <h1>Edit Profile</h1>
        <form method="POST" action="{{ route('profile.update') }}" >
            {{-- {{ route('profile.update') }} --}}
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="age">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $user->age) }}" required>
                @error('age')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile', $user->mobile) }}" required>
                @error('mobile')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $user->city) }}" required>
                @error('city')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group ">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $user->state) }}" required>
                @error('state')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary mt-3">Update Changes</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection
