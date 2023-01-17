<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'method' => 'home',
            'title' => 'Beranda',
            'page1' => 'Beranda',
        ];
        return view('dashboard/main', $data);
    }
    public function about()
    {
        $data = [
            'method' => 'about',
            'title' => 'Tentang Kami',
            'page1' => 'Preferensi',
            'page2' => 'Tentang Kami',
        ];
        return view('dashboard/about', $data);
    }
}
