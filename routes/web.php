<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $fakultas = [['School of Computer Science', 'Computer Science'],
            ['School of Design', 'Desain Komunikasi Visual'],
            ['School of Business Management', 'Business Creation']];
    return view('welcome' )->with('fakultas', $fakultas);
});

Route::get('/dosen', function () {
    $dsn =  [['Agus', 'CS', 'D0111'],
            ['Budi', 'BC', 'D1211'],
            ['Joko', 'DKV', 'D2019'],
            ['Jono', 'DKV', 'D4031'],
            ['Susan', 'CS', 'D8172'],
            ['Surti', 'CS', 'D0912'],
            ['Siti', 'BC', 'D0123'],
            ['Bartholomeus', 'DKV', 'D6152'],
            ['Gerald', 'CS', 'D0192'],
            ['Reinhart', 'BC', 'D8361'],
            ['Edo', 'DKV', 'D8172'],
            ['Steven', 'BC', 'D5123'],
            ['Bowo', 'CS', 'D7162'],
            ['Viktor', 'DKV', 'D14045']];
    return view('dosen', ['dosen'=>$dsn]);
});

Route::get('/jurusan', function () {
    $kls = [['CS', 'Compilation Techniques', 60],
        ['CS', 'Computer Vision', 25],
        ['CS', 'Deep  Learning', 17],
        ['CS', 'Operating Systems', 57],
        ['DKV', 'Animation', 45],
        ['DKV', 'Video Design', 19],
        ['BC', 'Market Validation', 57],
        ['BC', 'Entrepreneur', 56]];
    return view('jurusan' )->with('kelas', $kls);
});
