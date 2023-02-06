<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Storage;
use Response;

class profilController extends Controller
{
    public function index()
    {
        return view('pages.tentang.profil');
    }
}
