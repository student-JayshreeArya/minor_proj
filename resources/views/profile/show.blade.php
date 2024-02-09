@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card mt-3 p-3">
                    @if ($user)
                        <h1>{{ $user->name }}'s Profile</h1>
                        {{-- <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture"> --}}
                        {{-- <img src="{{ public_path('assets/imglogo.png') }}" class="rounded" width="30%" height="30"/> --}}
                        {{-- <img src="/storage/app/public/profile_pictures/{{ $user->profile_picture }}" class="rounded" width="30%" height="30"/> --}}
                        {{-- @if ($user->profile_picture)
                <img src="{{ asset('/public/profile_pictures' . $user->profile_picture) }}">
            @else
                <p>No profile picture available</p>
            @endif --}}
                        <p><strong>Name :</strong> {{ $user->name }}</p>
                        <p><strong>Email :</strong> {{ $user->email }}</p>
                        <p><strong>Age :</strong> {{ $user->age }}</p>
                        <p><strong>Gender :</strong> {{ $user->gender }}</p>
                        <p><strong>Mobile :</strong> {{ $user->mobile }}</p>
                        <p><strong>City :</strong> {{ $user->city }}</p>
                        <p><strong>State :</strong> {{ $user->state }}</p>

                                {{-- <a href="{{}}" class="btn btn-dark btn-sm">Edit</a> --}}
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                        

                        {{-- <div class="container">
                            <div class="row justify-content-center">
                            <a href="{{ route('profile.create') }}" class="btn btn-primary mt-3" type="submit">Create Profile</a>
                        </div>
                    </div> --}}


                    @else
                        <p>No user found.</p>
                        <div class="container">
                            <div class="row justify-content-center">
                            <a href="{{ route('profile.store') }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>

                        <div class="container">
                            <div class="row justify-content-center">
                            <a href="{{ route('profile.create') }}" class="btn btn-primary mt-3" type="submit">Create Profile</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

