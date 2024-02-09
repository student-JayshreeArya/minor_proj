{{-- @extends('auth.layout')
@section('content') --}}
@extends('layouts.app')
@section('main')
{{-- content --}}
<!-- Display Validation Errors -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Display Success Message -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

{{-- <div class="card">
    <div class="card-header">
        Change Password
    </div>
<div class="card-body"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card mt-3 p-3">
                    <h1>Change Password</h1>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password_confirmation">Confirm New Password</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection