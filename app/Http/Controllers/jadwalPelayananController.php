<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posting\jadwalpelayanan;

class jadwalPelayananController extends Controller
{
    public function index()
    {
        return view('pages.jadwalpelayanan');
    }
    
    // API
    public function apiData()
    {
        $show = jadwalpelayanan::get();

        $data = [
            'show' => $show,
        ];

        return response()->json($data, 200);
    }
}
