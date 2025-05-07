<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


class PageController extends Controller
{
    public function login() {
        return view ('login');
    }

    public function dashboard(Request $request){
        return view(
            "dashboard",["username" => $request->username]
            );
    }

    public function profile(Request $request){
        return view(
            "profile",["username" => $request->username]
            );
    }

    public function kelola(Request $request)
    {
        $DataBuku = [
            ['judul' => 'Laskar Pelangi', 'tahun_terbit' => 2005, 'pengarang' => 'Andrea Hirata', 'gambar' => 'assets/buku/laskar-pelangi.jpeg'],
            ['judul' => 'Negeri 5 Menara', 'tahun_terbit' => 2009, 'pengarang' => 'Ahmad Fuadi', 'gambar' => 'assets/buku/negeri-5-menara.jpeg'],
            ['judul' => 'Perahu Kertas', 'tahun_terbit' => 2009, 'pengarang' => 'Dee Lestari', 'gambar' => 'assets/buku/perahu-kertas.jpeg'],
            ['judul' => 'Bumi', 'tahun_terbit' => 2014, 'pengarang' => 'Tere Liye', 'gambar' => 'assets/buku/bumi.jpeg'],
            ['judul' => 'Dilan: Dia adalah Dilanku Tahun 1990', 'tahun_terbit' => 2014, 'pengarang' => 'Pidi Baiq', 'gambar' => 'assets/buku/dilan.jpeg'],
            ['judul' => 'Sang Pemimpi', 'tahun_terbit' => 2006, 'pengarang' => 'Andrea Hirata', 'gambar' => 'assets/buku/sang-pemimpi.jpeg'],
            ['judul' => 'Cantik Itu Luka', 'tahun_terbit' => 2002, 'pengarang' => 'Eka Kurniawan', 'gambar' => 'assets/buku/cantik-itu-luka.jpeg'],
            ['judul' => 'Filosofi Kopi', 'tahun_terbit' => 2006, 'pengarang' => 'Dewi Lestari', 'gambar' => 'assets/buku/filosofi-kopi.jpeg'],
            ['judul' => 'Gadis Kretek', 'tahun_terbit' => 2012, 'pengarang' => 'Ratih Kumala', 'gambar' => 'assets/buku/gadis-kretek.jpeg'],
            ['judul' => '9 Summers 10 Autumns', 'tahun_terbit' => 2011, 'pengarang' => 'Iwan Setyawan', 'gambar' => 'assets/buku/9-summers-10-autumns.jpeg'],
            ['judul' => 'Bumi Manusia', 'tahun_terbit' => 1980, 'pengarang' => 'Pramoedya Ananta Toer', 'gambar' => 'assets/buku/bumi-manusia.jpeg'],
            ['judul' => 'Manusia dan Badainya', 'tahun_terbit' => 2022, 'pengarang' => 'Syahid Muhammad', 'gambar' => 'assets/buku/manusia-dan-badainya.jpeg'],
            ['judul' => 'Hujan', 'tahun_terbit' => 2016, 'pengarang' => 'Tere Liye', 'gambar' => 'assets/buku/hujan.jpeg'],
            ['judul' => 'Sabtu Bersama Bapak', 'tahun_terbit' => 2014, 'pengarang' => 'Adhitya Mulya','gambar' => 'assets/buku/sabtu-bersama-bapak.jpeg'],
            ['judul' => 'Koala Kumal', 'tahun_terbit' => 2015, 'pengarang' => 'Raditya Dika', 'gambar' => 'assets/buku/koala-kumal.jpeg'],
        ];
        return view('pengelolaan', ['DataBuku'=> $DataBuku, 'username'=> $request->username]);
    }
}