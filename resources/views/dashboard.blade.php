@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid px-0" style="font-family: Poppins">
        <div class="card w-100 border-0 bg-img">
            <div class="card-body text-center" >
                <h1 class="mb-3" style="font-size: 3rem">Halo, <strong>{{ $username }}</strong>! Selamat Datang di Dashboard BookShelf.</h1>
                <h2 class="mb-3" style="font-size: 2rem; margin-top:30px">Temukan Dunia di Setiap Halaman</h2>
                <p class="mb-2" style="font-size: 1rem; padding:20px">
                    Jelajahi ribuan buku dari berbagai genre, penulis, dan waktu.<br>
                    BookShelf hadir untuk menemani perjalanan membacamu,<br>
                    kapan pun dan di mana pun.
                </p>
                <blockquote class="blockquote">
                    <p class="mb-0" style="font-style: italic; padding:30px">"A reader lives a thousand lives before he dies. </br>
                        The man who never reads lives only one."</p>
                    <footer class="blockquote-footer mt-0" >George R.R. Martin</footer>
                </blockquote>
            </div>
        </div>
    </div>    
@endsection

@section('username', $username)