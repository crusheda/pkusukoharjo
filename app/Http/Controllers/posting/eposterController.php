<?php

namespace App\Http\Controllers\posting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Models\posting\eposter;
use Carbon\Carbon;
use Storage;
use Response;
use Redirect;
use Auth;

class eposterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.posting.eposter.eposter');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.posting.eposter.eposter-tambah');
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
                'file' => 'nullable|mimes:jpg,png,jpeg,gif|max:10000',
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
            $path = $uploadedFile->store('public/files/posting/eposter');
            $title = $request->title ?? $uploadedFile->getClientOriginalName();
        }
        // print_r($request->lokasi);
        // die();

        $user = Auth::user();

        // print_r($request->deskripsi);
        // die();
        $data = new eposter;
        if ($request->kategori != null) {
            $data->kategori = $request->kategori;
        }
        $data->judul = $request->judul;

            $data->title = $title;
            $data->filename = $path;

        $data->save();
        return redirect()->route('admin.eposter.index')->with('message','Tambah Poster Kesehatan Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = eposter::find($id);
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
        $data = eposter::find($id);
        return view('pages.admin.posting.eposter.eposter-ubah')->with('list', $data);
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
            'file' => 'nullable|mimes:jpg,png,jpeg,gif|max:10000',
            ]);

        $uploadedFile = $request->file('file');

        $data = eposter::find($id);
        if ($request->kategori != null) {
            $data->kategori = $request->kategori;
        }
        $data->judul = $request->judul;

            if ($uploadedFile != '') {
                $path = $uploadedFile->store('public/files/posting/eposter');
                $title = $request->title ?? $uploadedFile->getClientOriginalName();

                Storage::delete($data->filename);

                $data->title = $title;
                $data->filename = $path;
            }

        $data->save();

        return redirect()->route('admin.eposter.index')->with('message','Perubahan Poster Kesehatan Berhasil');
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
        $show = eposter::get();

        $data = [
            'show' => $show,
        ];

        return response()->json($data, 200);
    }

    public function apiHapus($id)
    {
        $tgl = Carbon::now()->isoFormat('dddd, D MMMM Y, HH:mm a');

        $eposter = eposter::find($id);
        Storage::delete($eposter->filename);
        $eposter->delete();

        return response()->json($tgl, 200);
    }
}
