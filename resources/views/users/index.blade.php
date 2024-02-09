@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card mt-3 p-3">    
                <h1>Registered Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Mobile</th>
                <th>City</th>
                <th>State</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->state }}</td>

                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>
</div>
</div>
{{-- <div class="container">
        <h1>User Details</h1>
        <p>Number of registered users: {{ $userCount }}</p>
    </div> --}}
@endsection
