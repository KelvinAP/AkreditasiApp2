<?php

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
    return view('login');
});
Route::get('/logout', function () {
    return redirect('/');
});

Route::get('{path}', function(){
    return view('master');
})->where(

    ['path', '([A-z\d\-\/_.]+)?', 'path']

);

Route::get('/preview/dataMahasiswaBaru', function () {
    return view('preview/dataMahasiswaBaru');
});

Route::get('/alumni/dataPekerjaan', function () {
    return view('pages/dataPekerjaan');
});
Route::get('/alumni/dataPendidikan', function () {
    return view('pages/dataPendidikan');
});
