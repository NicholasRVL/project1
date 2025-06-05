@extends('layout.master')

@section('content')
<div class="container-xxl todo-container shadow-sm p-4 bg-white rounded">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">📝 My Tasks</h4>
        <div>
            <button class="btn btn-dark" onclick="login()">Login</button>
            <button class="btn btn-light" onclick="Register()">Register</button>
        </div>
    </div>
</div>



@endsection