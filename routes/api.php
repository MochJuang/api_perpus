<?php

use App\Kelas;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Kelas
Route::get('/kelas','api\MemberController@show_class');
Route::get('/kelas/{id}','api\MemberController@show_class_one');
Route::post('/kelas','api\MemberController@add_class');
Route::delete('/kelas/{id}','api\MemberController@delete_class');
Route::post('/kelas/{id}','api\MemberController@edit_class');

// Member
Route::get('/member','api\MemberController@show_member');
Route::get('/member/class/{id}','api\MemberController@show_member_class');
Route::get('/member/{id}','api\MemberController@show_member_one');
Route::post('/member','api\MemberController@add_member');
Route::delete('/member/{id}','api\MemberController@delete_member');
Route::post('/member/{id}','api\MemberController@edit_member');

// Judul
Route::get('/judul','api\BukuController@show_judul');
Route::get('/judul/{id}','api\BukuController@show_judul_one');
Route::post('/judul','api\BukuController@add_judul');
Route::delete('/judul/{id}','api\BukuController@delete_judul');
Route::post('/judul/{id}','api\BukuController@edit_judul');


// Buku
Route::post('/buku/{id}','api\BukuController@add_buku');
Route::delete('/buku/{id}','api\BukuController@delete_buku');
Route::get('/buku/{id}','api\BukuController@show_buku_where');

// Action
Route::post('borrow/{id_buku}/{id_member}','api\BukuController@pinjam_buku');
Route::get('borrow','api\BukuController@show_pinjam');
Route::put('borrow/{id}','api\BukuController@back');