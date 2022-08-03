<?php

namespace App\Http\Controllers\posting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Models\posting\jadwalpelayanan;
use Carbon\Carbon;
use Storage;
use Response;
use Redirect;
use Auth;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.posting.jadwal.jadwal-pelayanan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.posting.jadwal.jadwal-pelayanan-tambah');
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
            'nama' => 'required',
            'poli' => 'required',
            'ket' => 'required',
            ]);

        $user = Auth::user();

        // print_r($request->deskripsi);
        // die();
        $data = new jadwalpelayanan;
        $data->nama = $request->nama;
        $data->poli = $request->poli;
        $data->ket = $request->ket;
        $data->save();
        return redirect()->route('admin.jadwal.index')->with('message','Tambah Jadwal Baru Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = jadwalpelayanan::find($id);
        // return Storage::download($data->filename, $data->title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = jadwalpelayanan::find($id);
        return view('pages.admin.posting.jadwal.jadwal-pelayanan-ubah')->with('list', $data);
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
            'nama' => 'required',
            'poli' => 'required',
            'ket' => 'required',
            ]);

        $uploadedFile = $request->file('file');

        $data = jadwalpelayanan::find($id);
        $data->nama = $request->nama;
        $data->poli = $request->poli;
        $data->ket = $request->ket;
        $data->save();
        
        return redirect()->route('admin.jadwal.index')->with('message','Perubahan Jadwal Berhasil');
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
        $show = jadwalpelayanan::get();

        $data = [
            'show' => $show,
        ];

        return response()->json($data, 200);
    }

    public function apiHapus($id)
    {
        $tgl = Carbon::now()->isoFormat('dddd, D MMMM Y, HH:mm a');

        $jadwal = jadwalpelayanan::find($id);
        // Storage::delete($jadwal->filename);
        $jadwal->delete();

        return response()->json($tgl, 200);
    }
}
