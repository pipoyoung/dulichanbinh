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
use App\Users;
Route::get('/', function () {
    return view('welcome');
});

Route::get('trangchu', function () {
    return view('layout.trangchu');
});

Route::get('dangnhap',[
    'as'=>'getLogin', 
    'uses'=>'LoginController@getLogin'
    ]);

Route::post('dangnhap',[
    'as'=>'postLogin', 
    'uses'=>'LoginController@postLogin'
    ]);

Route::get('dangky',[
    'as'=>'getDangKy', 
    'uses'=>'RegisterController@getDangKy'
    ]);

Route::post('dangky',[
    'as'=>'postDangKy', 
    'uses'=>'RegisterController@postDangKy'
    ]);

Route::get('gioithieu',[
    'as'=>'gioithieu', 
    'uses'=>'TrangchuController@gioithieu'
    ]);

Route::get('hinhanh',[
    'as'=>'hinhanh', 
    'uses'=>'TrangchuController@hinhanh'
    ]);
Route::get('tourdulich',[
    'as'=>'tourdulich', 
    'uses'=>'TrangchuController@tourdulich'
    ]);

Route::get('timkiem',[
    'as'=>'timkiem', 
    'uses'=>'TrangchuController@gettimkiem'
    ]);

Route::get('dktour',[
    'as'=>'getDkTour', 
    'uses'=>'DkTourController@getDkTour'
    ])->middleware('adminlogin');

Route::post('dktour',[
    'as'=>'postDkTour', 
    'uses'=>'DkTourController@postDkTour'
    ])->middleware('adminlogin');


Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){

    Route::get('trangquantri',['as'=>'trangquantri','uses'=>'TrangchuController@trangquantri']);

    Route::group(['prefix'=>'tours'],function(){
        //admin/tours/danhsach
        Route::get('danhsach','ToursController@getDanhSach');

        Route::get('sua/{id}','ToursController@getSua');
        Route::post('sua/{id}','ToursController@postSua');

        Route::get('them','ToursController@getThem');
        Route::post('them','ToursController@postThem');

        Route::get('xoa/{id}','ToursController@getXoa');
    });

    Route::group(['prefix'=>'users'],function(){
        //admin/users/danhsach
        Route::get('danhsach','UsersController@getDanhSach');

        Route::get('sua/{id}','UsersController@getSua');
        Route::post('sua/{id}','UsersController@postSua');

        Route::get('them','UsersController@getThem');
        Route::post('them','UsersController@postThem');

        Route::get('xoa/{id}','UsersController@getXoa');
    });

    Route::group(['prefix'=>'huongdanvien'],function(){
        //admin/huongdanvien/danhsach
        Route::get('danhsach','HuongDanVienController@getDanhSach');

        Route::get('sua/{id}','HuongDanVienController@getSua');
        Route::post('sua/{id}','HuongDanVienController@postSua');

        Route::get('them','HuongDanVienController@getThem');
        Route::post('them','HuongDanVienController@postThem');

        Route::get('xoa/{id}','HuongDanVienController@getXoa');
    });

    Route::group(['prefix'=>'phuongtien'],function(){
        //admin/phuongtien/danhsach
        Route::get('danhsach','PhuongTienController@getDanhSach');

        Route::get('sua/{id}','PhuongTienController@getSua');
        Route::post('sua/{id}','PhuongTienController@postSua');

        Route::get('them','PhuongTienController@getThem');
        Route::post('them','PhuongTienController@postThem');

        Route::get('xoa/{id}','PhuongTienController@getXoa');
    });

    Route::group(['prefix'=>'diemthamquan'],function(){
        //admin/diemthamquan/danhsach
        Route::get('danhsach','DiemThamQuanController@getDanhSach');

        Route::get('sua/{id}','DiemThamQuanController@getSua');
        Route::post('sua/{id}','DiemThamQuanController@postSua');

        Route::get('them','DiemThamQuanController@getThem');
        Route::post('them','DiemThamQuanController@postThem');

        Route::get('xoa/{id}','DiemThamQuanController@getXoa');
    });
});
