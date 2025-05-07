@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container mt-5 mb-5 shadow rounded" style="width: 600px">
    <div class="card shadow-sm" style="font-family: Poppins">
        <div class="card-header text-white" style="background-color: #8b5e3c">
            <h3 class="mb-0">Profile</h3>
        </div>
        <div class="card-body text-center" style="background-color: #f8f0e3">
            <img src="{{ asset('assets/profile.png') }}" class="rounded-circle mb-3" width="120" height="120" alt="Foto Profil">
            <h4 class="mb-1">{{ $username }}</h4>

            <hr>

            <div class="row justify-content-center">
                <div class="col-md-8 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan email" required>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="no-hp" class="form-label">No. HP</label>
                    <input type="tel" class="form-control" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                </div>
                <div class="col-md-8 mb-3">
                    <label for="birthDate" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="birthDate" name="birthDate" 
                        max="{{ date('Y-m-d') }}" required>
                </div>
            </div>            
            <div>
                <a href="#" class="btn mt-3 btn-warning">Simpan</a>
            </div>
            <a href="{{ route('login') }}" class="btn mt-3 btn-danger">Logout</a>
        </div>
    </div>
</div>
@endsection

@section('username', $username)