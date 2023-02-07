<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelayananController extends Controller
{
    public function indexUnggulan() {
        return view('pages.pelayanan.unggulan');
    }

    public function indexGawatDarurat() {
        return view('pages.pelayanan.gawatdarurat');
    }

    public function indexRawatJalan() {
        return view('pages.pelayanan.rawatjalan');
    }

    public function indexRawatInap() {
        return view('pages.pelayanan.rawatinap');
    }

    public function indexRawatIntensif() {
        return view('pages.pelayanan.rawatintensif');
    }

    public function indexPenunjangMedis() {
        return view('pages.pelayanan.penunjangmedis');
    }
}
