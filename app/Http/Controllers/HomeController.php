<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'kelas' => 'Kom C',
            'prodi' => 'Teknologi Informasi'
        ];
        return view('v_home', $data);
    }

    public function about()
    {
        return view('v_about');
    }
}
