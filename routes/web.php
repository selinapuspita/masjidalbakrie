<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

Route::get('/', function () {
    return view('index');
});

// Route::get('/api/jadwal-sholat', function (Illuminate\Http\Request $request) {
//     $lat = $request->query('lat');
//     $long = $request->query('long');
//     $date = now()->format('Y/n/j'); // Format: 2025/7/20

//     $url = "https://api.myquran.com/v1/sholat/jadwal/{$lat},{$long}/{$date}";

//     try {
//         $response = Http::get($url);
//         return response()->json($response->json());
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'Gagal mengambil data'], 500);
//     }
// });

// Route::get('/api/jadwal-sholat', function () {
//     return response()->json([
//         'data' => [
//             'jadwal' => [
//                 'subuh' => '04:40',
//                 'dzuhur' => '12:00',
//                 'ashar' => '15:20',
//                 'maghrib' => '17:45',
//                 'isya' => '19:00'
//             ]
//         ]
//     ]);
// });




Route::get('/jadwal-sholat', [App\Http\Controllers\JadwalSholatController::class, 'get']);


