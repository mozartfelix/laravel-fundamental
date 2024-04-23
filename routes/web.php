<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-menu', function () {
    return view('list-menu');
});

Route::get('/list-menu/{menu}/{harga}', function (Request $request, $menu, $harga) {
    return 'Anda memilih makanan ' . $menu . ' dengan harga ' . $harga;
});

Route::group(['prefix' => 'list-menu'], function () {
    Route::get('/get-all-data', function (Request $request) {
        return response()->json([
            'info' => 'Data berhasil didapatkan',
            'data' => [
                '0' => [
                    'makanan' => 'Soto Mie',
                    'harga' => 8000
                ],
                '1' => [
                    'makanan' => 'Bakso Malang',
                    'harga' => 13000
                ],
                '2' => [
                    'makanan' => 'Ketoprak',
                    'harga' => 15000
                ]
            ]
        ]);
    });
});