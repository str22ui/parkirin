<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function index()
    {
        return view("halaman/index");
    }

    function detail()
    {
        return view("halaman/detail");
    }
    function plat()
    {

        $data = [
            'judul' => 'Halaman Plat',
            'kontak' => [
                'email' => 'sara@gmail.com',
                'youtube' => 'Program disini'
            ]
        ];
        return view("halaman/plat")->with($data);
    }

    function nav()
    {

        return view("micro/nav");
    }

    function history()
    {

        return view("halaman/history");
    }

    function detPlat()
    {
        return view("halaman/detPlat");
    }

    function coba()
    {
        return view("halaman/coba");
    }
}
