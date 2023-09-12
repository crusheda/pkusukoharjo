<?php

namespace App\Http\Controllers\bpjs;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class antreanController extends Controller
{
    // API
    function testerBpjs() {
        $consid = '5140';
        $secretkey = '8wRA8A44F6';
        $userkey = '50af1f6620a1225ea124cbc2c7a9cff0';
        $url = 'ref/poli';

        $client = new Client();
        $res = $client->get('https://apijkn.bpjs-kesehatan.go.id/antreanrs/'.$url, [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);

        // RESULT API INTO DECODED JSON
        $result = json_decode($res->getBody());
        // dd($result);

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            'response' => json_decode($getDecryption)
        ];

        return response()->json($data, 200);
    }


    function sigtime() {
        $consid = '26283';
        $secretkey = '3kX1E6C95A';
        $userkey = '50af1f6620a1225ea124cbc2c7a9cff0';

        // Get Timestamp
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));

        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretkey, true);

        // base64 encode�
        $encodedSignature = base64_encode($signature);

        $data = [
            'signature' => $encodedSignature,
            'timestamp' => $tStamp,
        ];

        return response()->json($data, 200);
    }

    public function refPoli()
    {
        // DEFINE SECRET VAR
        $consid = '5140';
        $secretkey = '8wRA8A44F6';
        $userkey = '3531661b282c4997d496bf34de35871e';
        $url = 'ref/poli';

        // API to BPJS
        $result = $this->antreanGet($url);

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'metacode' => $result->metaData->code,
            // 'metamessage' => $result->metaData->message,
            'response' => json_decode($getDecryption)
        ];
        // print_r(json_decode($getDecryption));
        // die();

        return response()->json($data, 200);
    }

    public function refPoliTest()
    {
        // DEFINE SECRET VAR
        $consid = '26283';
        $secretkey = '3kX1E6C95A';
        $userkey = '6e5c8afbf6be0a6d9c794edad8006ad2';
        $url = 'ref/poli';

        // API to BPJS
        $result = $this->antreanGetTester($url);
        dd($result);
        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'metacode' => $result->metaData->code,
            // 'metamessage' => $result->metaData->message,
            'response' => json_decode($getDecryption)
        ];
        // print_r(json_decode($getDecryption));
        // die();

        return response()->json($data, 200);
    }

    function decrypt($string) {
        $consid = '26283';
        $secretkey = '3kX1E6C95A';
        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $key = $consid.$secretkey.$this->bpjsTimestamp();
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            'response' => json_decode($getDecryption)
        ];

        return response()->json($data, 200);
    }

    public function cariJadwalTest()
    {
        // DEFINE SECRET VAR
        $consid = '26283';
        $secretkey = '3kX1E6C95A';
        $userkey = '50af1f6620a1225ea124cbc2c7a9cff0';
        $url = 'jadwaldokter/kodepoli/INT/tanggal/2023-09-12';

        // API to BPJS
        $result = $this->antreanGetTester($url);

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'consid' => $consid,
            // 'secretkey' => $secretkey,
            // 'userkey' => $userkey,
            // 'url' => $url,
            // 'metaData' => $result,
            'decryptResponse' => json_decode($getDecryption)
        ];

        // dd($data);

        return response()->json($data, 200);
    }

    public function cariJadwal($poli, $tgl)
    {
        // DEFINE SECRET VAR
        $consid = '5140';
        $secretkey = '8wRA8A44F6';
        $userkey = '3531661b282c4997d496bf34de35871e';
        $url = 'jadwaldokter/kodepoli/'.$poli.'/tanggal/'.$tgl;

        // API to BPJS
        $result = $this->antreanGet($url);

        // print_r($result);
        // die();
        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'metacode' => $result->metaData->code,
            // 'metamessage' => $result->metaData->message,
            'response' => json_decode($getDecryption)
        ];

        return response()->json($data, 200);
    }

    // TOOLS BPJS -------------------------------------------------------------------------------------------------------------------------------
    public function antreanGet($url)
    {
        $consid = '5140';
        $userkey = '3531661b282c4997d496bf34de35871e';

        $client = new Client();
        $res = $client->get('https://apijkn.bpjs-kesehatan.go.id/antreanrs/'.$url, [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);
        // RESULT API INTO JSON DECODED
        return json_decode($res->getBody());
    }

    public function antreanGetTester($url)
    {
        $consid = '26283';
        $userkey = '6e5c8afbf6be0a6d9c794edad8006ad2';

        $client = new Client();
        $res = $client->get('https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/'.$url, [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);
        // RESULT API INTO JSON DECODED
        return json_decode($res->getBody());
    }

    public function antreanPost($url, $kdbook)
    {
        $consid = '5140';
        $userkey = '3531661b282c4997d496bf34de35871e';

        $client = new Client();

        $res = $client->post('https://apijkn.bpjs-kesehatan.go.id/antreanrs/'.$url, [
            'json' => [
                'kodebooking' => $kdbook
            ],
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);

        // RESULT API INTO JSON DECODED
        return json_decode($res->getBody());
    }

	public function generateSignature()
	{
        $consid = '5140';
        $secretkey = '8wRA8A44F6';
        $userkey = '3531661b282c4997d496bf34de35871e';

        // Get Timestamp
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));

        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretkey, true);

        // base64 encode�
        $encodedSignature = base64_encode($signature);

		return $encodedSignature;
	}

	public function bpjsTimestamp()
	{
        // Computes the timestamp
        date_default_timezone_set('UTC');
        $result = strval(time()-strtotime('1970-01-01 00:00:00'));
		return $result;
	}

	public static function stringDecrypt($key, $string)
	{
		$encrtyp_method = 'AES-256-CBC';

        $key_hash = hex2bin(hash('sha256', $key));

        $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);

        $dekripsi = openssl_decrypt(base64_decode($string), $encrtyp_method, $key_hash, OPENSSL_RAW_DATA, $iv);

        $decompress = \LZCompressor\LZString::decompressFromEncodedURIComponent($dekripsi);

        return $decompress;
	}
}
