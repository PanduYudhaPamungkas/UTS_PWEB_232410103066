@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach ($DataBuku as $buku)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset($buku['gambar'] ?? 'error.jpg') }}" class="card-img-top" alt="{{ $buku['judul'] }}" style="height: 520px; object-fit: cover;">
                <div class="card-body" style="font-family: 'Poppins'; text-align:center">
                    <h5 class="card-title fw-bold">{{ $buku['judul'] }}</h5>
                    <p class="card-text"><strong>Pengarang:</strong> {{ $buku['pengarang'] }}</p>
                    <p class="card-text "><strong>Tahun Terbit:</strong> {{ $buku['tahun_terbit'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-3 mb-2">
        <a type="submit" href="{{ route('dashboard') }}" class="custom-btn">Kembali</a>
    </div>
</div>
@endsection

@section('username')
    {{ $username }}
@endsection

