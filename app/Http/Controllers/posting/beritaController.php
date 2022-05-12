<?php

namespace App\Http\Controllers\posting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Models\posting\berita;
use Carbon\Carbon;
use Storage;
use Response;
use Redirect;
use Auth;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.posting.berita.berita-terkini');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.posting.berita.berita-terkini-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'nama' => 'required',
            'file' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:10000',
            ]);

        // tampung berkas yang sudah diunggah ke variabel baru
        // 'file' merupakan nama input yang ada pada form
        $uploadedFile = $request->file('file');     
        // print_r($uploadedFile);
        // die();
        // simpan berkas yang diunggah ke sub-direktori 'public/files'
        // direktori 'files' otomatis akan dibuat jika belum ada
        if ($uploadedFile == '') {
            $path = null;
            $title = null;
        }else {
            $path = $uploadedFile->store('public/files/posting/berita/thumbnail');
            $title = $request->title ?? $uploadedFile->getClientOriginalName();
        }
        // print_r($request->lokasi);
        // die();

        $user = Auth::user();

        // print_r($request->deskripsi);
        // die();
        $data = new berita;
        $data->id_user = $user->id;
        $data->judul = $request->judul;
        $data->nama = $request->nama;
        $data->tgl = Carbon::now();
        $data->deskripsi = $request->deskripsi;

            $data->title = $title;
            $data->filename = $path;

        $data->save();
        return redirect()->route('admin.berita.index')->with('message','Tambah Artikel Berita Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = berita::find($id);
        return Storage::download($data->filename, $data->title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = berita::find($id);
        return view('pages.admin.posting.berita.berita-terkini-ubah')->with('list', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required',
            'nama' => 'required',
            ]);

        $uploadedFile = $request->file('file');

        $data = berita::find($id);
        $data->judul = $request->judul;
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;

            if ($uploadedFile != '') {
                $path = $uploadedFile->store('public/files/posting/berita/thumbnail');
                $title = $request->title ?? $uploadedFile->getClientOriginalName();

                $data->title = $title;
                $data->filename = $path;
            }

        $data->save();
        // return redirect(route('admin.berita.index'));
        return redirect()->route('admin.berita.index')->with('message','Perubahan Artikel Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // API
    public function apiData()
    {
        $show = berita::get();

        $data = [
            'show' => $show,
        ];

        return response()->json($data, 200);
    }

    public function apiHapus($id)
    {
        $tgl = Carbon::now()->isoFormat('dddd, D MMMM Y, HH:mm a');

        $berita = berita::find($id);
        Storage::delete($berita->filename);
        $berita->delete();

        return response()->json($tgl, 200);
    }
}
