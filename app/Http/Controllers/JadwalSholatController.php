<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class JadwalSholatController extends Controller
{
    public function get()
    {
        try {

            // BAGIAN INI UNTUK SERVER, AKTIFKAN KODE INI JIKA SUDAH DI SERVER DAN HAPUS BAGIAN LOCAL DEVELOPMENT
            // $response = Http::get('https://api.aladhan.com/v1/timingsByCity', [
            //     'city' => 'Jakarta',
            //     'country' => 'Indonesia',
            //     'method' => 11
            // ]);

            // BAGIAN INI UNTUK LOCAL DEVELOPMENT, KOMENTARI ATAU HAPUS JIKA SUDAH DI SERVER
            $response = Http::withOptions(['verify' => false])->get('https://api.aladhan.com/v1/timingsByCity', [
                'city' => 'Jakarta',
                'country' => 'Indonesia',
                'method' => 11
            ]);


            $data = $response->json();

            if ($data['code'] === 200 && isset($data['data']['timings'])) {
                return response()->json([
                    'status' => true,
                    'data' => [
                        'jadwal' => $data['data']['timings'],
                        'tanggal' => date('Y-m-d'),
                        'lokasi' => $data['data']['meta']['timezone']
                    ]
                ]);
            }

            return response()->json(['status' => false, 'message' => 'API error']);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Exception: ' . $e->getMessage()
            ]);
        }
    }

}
