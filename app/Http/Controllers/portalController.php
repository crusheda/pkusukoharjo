<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\posting\berita;
use Carbon\Carbon;
use Storage;
use Response;

class portalController extends Controller
{
    public function index()
    {
        return view('pages.index');
        // return view('pages.maintenance');
    }

    // API
    public function showBerita()
    {
        $berita = berita::orderBy('id', 'desc')->take(6)->get();
        // $beritaUtama = DB::table('berita')->where('id', \DB::raw("(select max(`id`) from berita)"))->get();
        // print_r($berita);
        // die();

        $data = [
            'berita' => $berita,
        ];

        return response()->json($data, 200);
    }

    public function showArtikel()
    {
        $berita = berita::take(4)->orderBy('id', 'desc')->get();

        $data = [
            'berita' => $berita,
        ];

        return response()->json($data, 200);
    }
}
