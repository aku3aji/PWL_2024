<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class AboutController extends Controller{
        public function about() {
            $nama = 'Triaji Ibnu Hermawan';
            $nim = '2241760075';
            return "Nama: $nama, NIM: $nim";
        }
    }
    