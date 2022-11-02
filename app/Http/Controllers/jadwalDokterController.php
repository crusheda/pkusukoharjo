<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class jadwalDokterController extends Controller
{
    public function index()
    {
        return view('pages.jadwal-dokter');
    }

    public function pushApi()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://103.155.246.25:8000/api/jadwaldokter/');
        // $res = $client->request('GET', 'http://192.168.1.3:8000/api/jadwaldokter/');
        $data = json_decode($res->getBody());

        return response()->json($data, 200);
    }

    // CONTOH POST DATA
    public function saveApiData()
    {
        $client = new Client();
        $res = $client->request('POST', 'https://url_to_the_api', [
            'form_params' => [
                'client_id' => 'test_id',
                'secret' => 'test_secret',
            ]
        ]);
        echo $res->getStatusCode();
        // 200
        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // {"type":"User"...'
    }
}
