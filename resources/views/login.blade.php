@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<section class="d-flex align-items-center justify-content-center shadow rounded" style="min-height: 600px;">
    <form action="/dashboard" method="get" class="border p-5 border rounded shadow" style="background-color:rgb(185, 171, 133);">
        <h2 class="mb-4 text-center font-bold">Login</h2>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>
        <button type="submit" class="custom-btn w-100">Masuk</button>
    </form>
</section>
@endsection