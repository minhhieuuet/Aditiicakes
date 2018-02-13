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

Route::get('tin','MyController@Tin');

Route::get('admin/dang-nhap','AdminController@getDangnhapAdmin');
Route::post('admin/dang-nhap','AdminController@postDangnhapAdmin')->name('admin/dang-nhap');

Route::get('admin/dang-xuat','AdminController@dangxuat')->name('admin/dang-xuat');


//Category
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	

	Route::get('trang-chu','AdminController@trangchu')->name('trang-chu');



	Route::get('loai-san-pham','AdminController@theloai')->name('loai-san-pham');
	Route::get('loai-san-pham/xoa/{id}','AdminController@xoaLSP');
	Route::get('loai-san-pham/them', function(){
		return view('admin.themLSP');
	})->name('loai-san-pham/them');
	Route::post('postthemLSP','AdminController@postthemLSP')->name('postthemLSP');
	
	//San-pham
	Route::get('san-pham','AdminController@sanpham')->name('san-pham');
	Route::get('san-pham/xoa/{id}','AdminController@xoaSP');
	Route::get('san-pham/them','AdminController@themSP');
	Route::post('postthemSP','AdminController@postthemSP')->name('postthemSP');
	Route::get('san-pham/{id}','AdminController@suaSP');
	Route::post('postsuaSP','AdminController@postsuaSP')->name('postsuaSP');
	//Don-hang
	Route::get('don-hang','AdminController@donhang')->name('don-hang');
	Route::get('don-hang/xoa/{id}','AdminController@xoadonhang');

	//Khach-hang
	Route::get('khach-hang','AdminController@khachhang')->name('khach-hang');
	Route::get('khach-hang/profile/{id}','AdminController@profile');

	//Nguoi dung

	Route::get('nguoi-dung','AdminController@nguoidung')->name('nguoi-dung');
	Route::get('nguoi-dung/xoa/{id}','AdminController@xoaNguoiDung');
	Route::get('nguoi-dung/khoa/{id}','AdminController@blockNguoiDung');

});


//Trang giao dien
Route::get('trang-chu','LayoutController@trangchu');
Route::get('/','LayoutController@trangchu');
//Trang loai san pham

Route::get('loai-san-pham/{id}','LayoutController@loaisanpham');
//Trang san pham
Route::get('san-pham/{id}','LayoutController@sanpham');
//Trang lien he
Route::get('lien-he','LayoutController@lienhe');

//Trang dang nhap user

Route::get('dang-nhap','UserController@dangnhap');
Route::post('dang-ky','UserController@postDangKy')->name('dangky');
Route::post('dang-nhap','UserController@postDangNhap')->name('dangnhap');
Route::get('dang-xuat','UserController@dangxuat')->name('dang-xuat');
Route::get('add-to-cart/{id}','LayoutController@getAddtoCart')->name('themgiohang');

Route::get('del-cart/{id}','LayoutController@getDelItemCart')->name('xoagiohang');

Route::get('thanh-toan','LayoutController@thanhtoan');

Route::post('thanh-toan','LayoutController@postthanhtoan')->name('thanhtoan');

