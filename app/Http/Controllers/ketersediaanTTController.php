<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ketersediaanTTController extends Controller
{
    public function index()
    {
        return view('pages.informasi.ketersediaan-tt');
    }

    // API
    public function pushApi()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://103.210.117.106:8000/api/informasi/tt');
        $data = json_decode($res->getBody());

        return response()->json($data, 200);
    }
}
