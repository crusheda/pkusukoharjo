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

    public function semuaBerita()
    {
        $berita = berita::orderBy('id', 'desc')->get();

        $data = [
            'berita' => $berita,
        ];

        return view('pages.artikel.berita.berita-lainnya')->with('list', $data);
    }

    public function detailBerita($id)
    {
        $berita = berita::where('id',$id)->first();

        $data = [
            'berita' => $berita,
        ];

        return view('pages.artikel.berita.berita-tampil')->with('list', $data);
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

    public function showBeritaLainnya()
    {
        $berita = berita::orderBy('id', 'desc')->take(9)->get();
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
