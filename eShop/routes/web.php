<?php


use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\SanphamController;
use App\Http\Controllers\ContactController;


Route::get('/search', [SanphamController::class, 'search'])->name('product.search');






Route::prefix('contact')->name('contact.')->group(function () {
    // Route xử lý gửi biểu mẫu liên hệ
    Route::post('/', [ContactController::class, 'submitForm'])->name('submit.form');

    // Route hiển thị danh sách liên hệ
    Route::get('/show-contacts', [ContactController::class, 'showContacts'])->name('show.contacts');
});

// Route xử lý yêu cầu AJAX để kiểm tra đăng nhập và trả về thông báo
Route::get('/checkLoginStatus', [SanphamController::class, 'checkLoginStatus'])->name('checkLoginStatus');




// Trang chủ: '/'
// Trang quản trị: '/dashboard'
// Trang danh sách sản phẩm: '/admin/sanpham'

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::prefix('admin')->name('admin.')->group(function () {
    // This route is for the admin dashboard
    Route::get('/', [HomeController::class, 'admin'])->name('dashboard');
    Route::get('/sanpham', [SanphamController::class, 'index'])->name('sanpham.index');
});




Route::group(['prefix' => 'account'], function () {

    Route::get('/dang-ky', [AccountController::class, 'register'])->name('account.register');

    Route::post('/save', [AccountController::class, 'save'])->name('account.save');

    Route::get('/dang-nhap', [AccountController::class, 'login'])->name('account.login');

    Route::post('/dang-nhap', [AccountController::class, 'auth'])->name('auth');

    Route::get('/dang-xuat', [AccountController::class, 'logout'])->name('logout');
});






// ====>  Cach viet rut ron den cac duong dan trong trang
Route::prefix("/admin")->name("admin.")->middleware("auth")->group(function () {
    Route::prefix("/danh-muc")->name("danhmuc.")->group(function () {
        Route::get('/', [DanhMucController::class, "index"])->name("index");

        Route::get('/tao-danh-muc', [DanhMucController::class, "create"])->name("create");

        Route::get('/{id}/sua-danh-muc', [DanhMucController::class, "edit"])->name("edit");

        // gia tri id nay khong bat buoc va phai o cuoi url
        Route::post('/luu/{id?}', [DanhMucController::class, "upsert"])->name("upsert");

        // Xóa dữ liệu trong databse
        Route::post('/xoa/{id}', [DanhMucController::class, "destroy"])->name("destroy");
    });
});


Route::prefix("/admin")->name('admin.')->middleware("auth")->group(function () {
    Route::prefix("/san-pham")->name('sanpham.')->group(function () {

        Route::get('/', [SanphamController::class, "index"])->name('index');

        Route::post('/luu/{id?}', [SanPhamController::class, "upsert"])->name('upsert');

        Route::get('/tao-san-pham', [SanphamController::class, "create"])->name('create');

        Route::post('/xoa{id}', [SanphamController::class, "destroy"])->name('destroy');

        Route::get('/{id}/sua-san-pham', [SanphamController::class, "edit"])->name('edit');

    });
});






