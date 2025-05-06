<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    private $users = [
        [
            'username' => 'MUHAMMAD IVAN MAKHRIZAL',
            'email' => 'admin1@email.com',
            'password' => '12345',
            'telepon' => '081234567890',
            'alamat' => 'Jl. Merdeka No. 123, Jakarta',
            'foto' => 'MUHAMMAD IVAN MAKHRIZAL.jpg'
        ],
        [
            'username' => 'Siti Nurhaliza',
            'email' => 'admin2@email.com',
            'password' => 'abcd',
            'telepon' => '081298765432',
            'alamat' => 'Jl. Mawar No. 45, Bandung',
            'foto' => 'Siti Nurhaliza.jpg'
        ],
    ];

    private $buku = [
        [
            'gambar' => 'croked-kingdom.avif',
            'penulis' => 'Leigh Bardugo',
            'judul' => 'Crooked Kingdom',
            'harga' => 134250
        ],
        [
            'gambar' => 'Laut Bercerita.png',
            'penulis' => 'Leila S. Chudori',
            'judul' => 'Laut Bercerita',
            'harga' => 86250
        ],
        [
            'gambar' => 'circe.avif',
            'penulis' => 'Madeline Miller',
            'judul' => 'Circe',
            'harga' => 101250
        ],
        [
            'gambar' => 'critical eleven.avif',
            'penulis' => 'Ika Natassa',
            'judul' => 'Novel Critical Eleven',
            'harga' => 59400
        ],
        [
            'gambar' => 'anak rantau.avif',
            'penulis' => 'A Fuadi',
            'judul' => 'Novel Anak Rantau',
            'harga' => 104500
        ],
        [
            'gambar' => 'jujutsu  kaisen.webp',
            'penulis' => 'Gege Akutami',
            'judul' => 'Jujutsu Kaisen 18',
            'harga' => 33750
        ],
        [
            'gambar' => 'atomic habits.avif',
            'penulis' => 'James Clear',
            'judul' => 'Atomic Habits',
            'harga' => 335000
        ],
        [
            'gambar' => 'one piece.avif',
            'penulis' => 'Eiichiro Oda',
            'judul' => 'One Piece 95',
            'harga' => 24000
        ],
        [
            'gambar' => 'dia adalah kakakku.jpg',
            'penulis' => 'Tere Liye',
            'judul' => 'Dia Adalah Kakakku',
            'harga' => 93500
        ],
        [
            'gambar' => 'dilan 1990.avif',
            'penulis' => 'Pidi Baiq',
            'judul' => 'Dilan: Dia adalah Dilanku Tahun 1990',
            'harga' => 89100
        ],
        [
            'gambar' => 'origami hati.avif',
            'penulis' => 'Boy Candra',
            'judul' => 'Origami Hati',
            'harga' => 63000
        ],
        [
            'gambar' => 'dr stone.avif',
            'penulis' => 'Riichiro Inagaki',
            'judul' => 'Dr. Stone 12',
            'harga' => 33750
        ],
        [
            'gambar' => 'madilog.avif',
            'penulis' => 'Tan Malaka',
            'judul' => 'Madilog : Materialisme, Dialektika, dan Logika',
            'harga' => 11650
        ],
        [
            'gambar' => 'seni merayu tuhan.avif',
            'penulis' => 'Husein Ja`far Al Hadar',
            'judul' => 'Seni Merayu Tuhan',
            'harga' => 62100
        ],
        [
            'gambar' => 'bumi.avif',
            'penulis' => 'Tere Liye',
            'judul' => 'Bumi',
            'harga' => 98100
        ],
    ];

    public function pagelogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        foreach ($this->users as $user) {
            if (
                $request->email === $user['email'] &&
                $request->password === $user['password']
            ) {
                return redirect()->route('dashboard', [
                    'username' => $user['username'],
                ]);
            }
        }

        return redirect()->back()->with('error', 'Email atau password salah.');
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;
        $buku = $this->buku;

        return view('dashboard', compact('username', 'buku'));
    }

    public function profile(Request $request)
    {
        $username = $request->username;

        foreach ($this->users as $user) {
            if ($user['username'] === $username) {
                return view('profile', $user);
            }
        }

        return redirect()->back();
    }

    public function showBuku(Request $request)
    {
        $username = $request->username;
        $buku = $this->buku;

        return view('pengelolaan', compact('username', 'buku'));
    }

}
