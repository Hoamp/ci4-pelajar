<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'tes' => ['ji', 'ro', 'lu']
        ];
        return view('pages/home', $data);
    }
    public function about(){
        $data = [
            'title' => 'About',
        ];
        return view('pages/about', $data);
    }
    public function contact(){
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl bla bla',
                    'kota' => 'karanganyar'
                ],
                [
                    'tipe' => 'sekolah',
                    'alamat' => 'jl anu anu',
                    'kota' => 'Karanganyar'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
