<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\posting\berita;
use App\Models\posting\eposter;
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
        // $berita = berita::orderBy('id', 'desc')->get();
        $data = DB::table('berita')->orderBy('id', 'desc')->where('deleted_at',null)->paginate(9);

        // $data = [
        //     'berita' => $berita,
        // ];

        return view('pages.artikel.berita.berita-lainnya')->with('list', $data);
    }

    public function semuaEposter()
    {
        $eposter = DB::table('eposter')->orderBy('id', 'desc')->where('deleted_at',null)->paginate(20);
        $totalEposter = eposter::count();
        // print_r($totalEposter);
        // die();

        $data = [
            'eposter' => $eposter,
            'totalEposter' => $totalEposter,
        ];

        return view('pages.artikel.eposter.eposter-lainnya')->with('list', $data);
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
    public function showPortal()
    {
        $berita = berita::orderBy('id', 'desc')->take(6)->get();
        $eposter = eposter::orderBy('id', 'desc')->take(12)->get();
        // $beritaUtama = DB::table('berita')->where('id', \DB::raw("(select max(`id`) from berita)"))->get();
        // print_r($berita);
        // die();

        $data = [
            'berita' => $berita,
            'eposter' => $eposter,
        ];

        return response()->json($data, 200);
    }

    public function showBeritaLainnya()
    {
        $berita = berita::orderBy('id', 'desc')->take(9)->get();
        // $berita = DB::table('berita')->orderBy('id', 'desc')->where('deleted_at',null)->paginate(9);
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
