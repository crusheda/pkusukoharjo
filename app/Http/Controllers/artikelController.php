<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\posting\berita;
use Carbon\Carbon;
use Storage;
use URL;
use Response;

class artikelController extends Controller
{
    public function showBerita($id)
    {
        $now = Carbon::now()->isoFormat('YYYY-MM-DD HH:mm:ss');

        $show = berita::where('id',$id)->first();

        $data = [
            'now' => $now,
            'show' => $show,
        ];

        return view('pages.artikel.berita')->with('list', $data);
    }
}
