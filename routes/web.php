<?php

use App\Http\Controllers\admin\AdminAboutUsController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminService;
use App\Http\Controllers\AdminBlog;
use App\Http\Controllers\AdminSlide;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShippingServices;
use App\Http\Controllers\ui\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/lang/{locale}', [MainController::class, 'setLanguage'])->name('language');

Route::fallback(function () {
    return view('error.404');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'processLogin'])->name('auth.processLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'processRegister'])->name('auth.processRegister');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('home', [AdminHomeController::class, 'homeAdmin'])->name('admin-home');
    Route::get('header-settings', [AdminHomeController::class, 'adminHeaderSetting'])->name('admin-header-setting');
    Route::post('header-settings-update', [AdminHomeController::class, 'adminHeaderSettingUpdate'])->name('admin-header-setting.update');
    /* home */
    Route::get('transportation-company-settings', [AdminHomeController::class, 'adminTransportCompanySetting'])->name('admin-transportation-company-settings');
    Route::post('transportation-company-settings-update', [AdminHomeController::class, 'adminTransportCompanySettingUpdate'])->name('admin-transportation-company-settings-update');
    Route::post('why-choose-us-update', [AdminHomeController::class, 'adminWhyChooseUs'])->name('admin-why-choose-us');
    Route::get('client-reviews', [AdminHomeController::class, 'adminClientReview'])->name('admin-client-review');
    Route::get('create-client-reviews', [AdminHomeController::class, 'adminCreateClientReview'])->name('admin-creat-client-review');
    Route::post('create-client-reviews-post', [AdminHomeController::class, 'adminCreateClientReviewPost'])->name('admin-creat-client-review-post');
    Route::get('update-client-reviews/{id}', [AdminHomeController::class, 'adminUpdateClientReview'])->name('admin-update-client-review');
    Route::post('update-client-reviews-post/{id}', [AdminHomeController::class, 'adminUpdateClientReviewPost'])->name('admin-update-client-review-post');

    /* about us */

    Route::get('about-us', [AdminAboutUsController::class, 'adminAboutUs'])->name('admin-about-us');
    Route::post('about-us-update', [AdminAboutUsController::class, 'adminAboutUsUpdate'])->name('admin-about-us-update');

    /* service */

    Route::get('create-service', [AdminService::class, 'adminServiceCreate'])->name('admin-service-create');
    Route::post('service-update', [AdminService::class, 'adminServiceUpdate'])->name('admin-service-update');
    Route::get('service', [AdminService::class, 'adminService'])->name('admin-service');
    Route::get('service-edit/{type}', [AdminService::class, 'adminServiceEdit'])->name('admin-service-edit');
    Route::post('service-delete/{id}', [AdminService::class, 'adminServiceDelete'])->name('admin-service-delete');

    /* blog */
    Route::get('blog', [AdminBlog::class, 'adminBlog'])->name('admin-blog');
    Route::get('create-blog', [AdminBlog::class, 'adminCreateBlog'])->name('admin-create-blog');
    Route::get('edit-blog/{id}', [AdminBlog::class, 'adminEditBlog'])->name('admin-edit-blog');
    Route::post('create-blog-up', [AdminBlog::class, 'adminCreateBlogUp'])->name('admin-create-blog-up');
    Route::post('edit-blog-up/{id}', [AdminBlog::class, 'adminEditBlogUp'])->name('admin-edit-blog-up');

    Route::get('categories', [AdminBlog::class, 'adminCategory'])->name('admin-categories');
    Route::get('create-category', [AdminBlog::class, 'adminCreateCategory'])->name('admin-create-category');
    Route::get('edit-category/{id}', [AdminBlog::class, 'adminEditCategory'])->name('admin-edit-category');
    Route::post('create-category-up', [AdminBlog::class, 'adminCreateCategoryUp'])->name('admin-create-category-up');
    Route::post('edit-category-up/{id}', [AdminBlog::class, 'adminEditCategoryUp'])->name('admin-edit-category-up');


    /* setting page */

    Route::get('setting', [SettingController::class, 'setting'])->name('admin-setting');
    Route::post('setting-up', [SettingController::class, 'settingUp'])->name('admin-setting-up');

    /* slide service header */
    Route::get('slide', [AdminSlide::class, 'adminSlide'])->name('admin-slide');
    Route::get('create-slide', [AdminSlide::class, 'adminCreateSlide'])->name('admin-create-slide');
    Route::get('edit-slide/{id}', [AdminSlide::class, 'adminEditSlide'])->name('admin-edit-slide');

    Route::post('create-slide-up', [AdminSlide::class, 'adminCreateSlideUp'])->name('admin-create-slide-up');
    Route::post('edit-slide-up/{id}', [AdminSlide::class, 'adminEditSlideUp'])->name('admin-edit-slide-up');

});

Route::group(['prefix' => 'error'], function () {
    Route::get('/not-found', [ErrorController::class, 'notFound'])->name('error.not.found');
    Route::get('/forbidden', [ErrorController::class, 'forbidden'])->name('error.forbidden');
    Route::get('/unauthorized', [ErrorController::class, 'unauthorized'])->name('error.unauthorized');
});

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about.us');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('service-air-transport', [HomeController::class, 'airTransport'])->name('service.air.transport');
    Route::get('service-sea-transport', [HomeController::class, 'seaTransport'])->name('service.sea.transport');
    Route::get('service-road-transport', [HomeController::class, 'roadTransport'])->name('service.road.transport');
    Route::get('service-rail-transport', [HomeController::class, 'railTransport'])->name('service.rail.transport');
    Route::get('express-delivery', [HomeController::class, 'expressDelivery'])->name('service.express.delivery');
    Route::get('customs-services', [HomeController::class, 'customsServices'])->name('customs.services');
    Route::post('booking-form', [HomeController::class, 'BookingForm'])->name('booking.form');


    Route::get('shipping-services/{id}', [ShippingServices::class, 'index'])->name('shipping.services.index');



    Route::get('blog', [HomeController::class, 'Blog'])->name('blog');
    Route::get('detail-blog/{id}', [HomeController::class, 'DetailBlog'])->name('detail.blog');


    /* send mail */

//    Route::post('send-mail', [SendMailController::class, 'sendMail'])->name('send-mail');
//    Route::get("/noty", function(Illuminate\Http\Request $request){
//        $tb = $request->session()->get('noty');
//        return view('admin.pages.noty-email',['noty'=> $tb]);
//    });

});

Route::middleware(['auth'])->group(function () {

});

Route::group(['prefix' => '', 'middleware' => ['ui.moderator']], function () {

});

Route::group(['prefix' => '', 'middleware' => ['ui.admin']], function () {

});

/* End web */
/* Start api */
/* Restapi api */
Route::group(['prefix' => 'api/v1/r_'], function () {
    require_once __DIR__ . '/api/restapi.php';
});
/* User api */
Route::group(['prefix' => 'api/v1/r_user', 'middleware' => ['api.user']], function () {
    require_once __DIR__ . '/api/user.php';
});
/* Moderator api */
Route::group(['prefix' => 'api/v1/r_moderator', 'middleware' => ['api.moderator']], function () {
    require_once __DIR__ . '/api/moderator.php';
});
/* Admin api */
Route::group(['prefix' => 'api/v1/r_admin', 'middleware' => ['api.admin']], function () {
    require_once __DIR__ . '/api/admin.php';
});


