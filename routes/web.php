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
    return view('welcome');
});

Route::get('index', [
   'as' => 'trang-chu',
   'uses' => 'pagecontroller@getIndex'
]);

route::get('chitietsanpham/{id}', [
'as'=>'chitiet_sp',
'uses'=>'pagecontroller@getChiTietSanPham'
]);

route::get('sanphamtheoloai/{id}',[
'as'=>'sanphamtheoloai',
'uses'=>'pagecontroller@getSanPhamTheoLoai'
]);