@extends('auth.layout')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-0">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            {{-- <div class="form-group mb-3">
                                <label for="profile_picture">Profile Picture</label>
                                <input type="file" id="profile_picture" name="profile_picture" class="form-control" accept="image/jpeg,image/png,image/jpg,image/gif" required>
                                @if ($errors->has('profile_picture'))
                                <span class="text-danger">{{ $errors->first('profile_picture') }}</span>
                                @endif
                            </div> --}}
                            <div class="form-group mb-3 mt-2">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{old('name')}}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" value="{{old('email')}}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" placeholder="Age" id="age" class="form-control" name="age" value="{{old('age')}}" required autofocus>
                                @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                {{-- <input type="text" placeholder="Gender" id="gender" class="form-control" name="gender" value="{{old('gender')}}" required autofocus> --}}
                                <select  class="form-control" id="gender" name="gender" type="text" value="{{old('gender')}}" required autofocus>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group mb-3">
                                <input type="mobile" placeholder="Mobile" id="mobile" class="form-control" name="mobile" value="{{old('mobile')}}" required autofocus>
                                @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="City" id="city" class="form-control" name="city" value="{{old('city')}}" required autofocus>
                                @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="State" id="state" class="form-control" name="state" value="{{old('state')}}" required autofocus>
                                @if ($errors->has('state'))
                                <span class="text-danger">{{ $errors->first('state') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


{{-- <div class="form-group mb-3">
                                <label for="profile_picture">Profile Picture</label>
                                <input type="file" id="profile_picture" name="profile_picture" class="form-control" required>
                                @if ($errors->has('profile_picture'))
                                <span class="text-danger">{{ $errors->first('profile_picture') }}</span>
                                @endif
                            </div> --}}