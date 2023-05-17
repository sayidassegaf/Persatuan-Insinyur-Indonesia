<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ApecregisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegistrationFormController;
use App\Models\RegistrationForm;

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

// Auth::routes();



// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//     Route::group(['prefix' => 'user'], function() {
//         Route::get('/dashboard/registrations', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard.registrations.index');
//         Route::get('/create-form', [App\Http\Controllers\UserController::class, 'createForm'])->name('user.create_form');
//         Route::post('/store-form', [App\Http\Controllers\UserController::class, 'storeForm'])->name('user.store_form');
//         Route::get('/show/{form}', [App\Http\Controllers\UserController::class, 'showFormInValidation'])->name('user.form_in_validation');
//         Route::get('/show-detail/{form}', [App\Http\Controllers\UserController::class, 'showFormDetail'])->name('user.form_detail');
//     });

//     Route::group(['prefix' => 'admin'], function() {
//         Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
//         Route::put('/validate-form/{form}', [App\Http\Controllers\AdminController::class, 'validateForm'])->name('admin.validate_form');
//         Route::get('/form-detail/{form}', [App\Http\Controllers\AdminController::class, 'showFormDetail'])->name('admin.form_detail');
//     });
// });

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});


Route::get('/', [HomeController::class, 'index']);



Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Sandhika Galih',
        'email' => 'sandhikagalih@gmail.com',
        'image' => 'sandhika.jpg'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::controller(ApecregisterController::class)->group(function(){
    Route::get('/form','index');
    Route::get('post', 'store');
});

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::resource('/dashboard/registrations_admin', AdminController::class)->middleware('admin');
// Route::resource('/dashboard/registrations', RegistrationFormController::class)->middleware('auth');

    Route::group(['middleware' => 'auth'], function() {
        
        Route::resource('/dashboard/registrations', RegistrationFormController::class)->middleware('auth');
        Route::get('/dashboard/registrations', [App\Http\Controllers\RegistrationFormController::class, 'index'])->name('dashboard.registrations.index');
        Route::get('/dashboard/registrations/create', [App\Http\Controllers\RegistrationFormController::class, 'create'])->name('dashboard.registrations.create');
        Route::post('/dashboard/registrations/store-form', [App\Http\Controllers\RegistrationFormController::class, 'storeForm'])->name('dashboard.registrations.store_form');
        Route::get('/dashboard/registrations/form-in-validation/{form}', [App\Http\Controllers\RegistrationFormController::class, 'showFormInValidation'])->name('dashboard.registrations.form_in_validation');
        Route::get('/dashboard/registrations/form-detail/{form}', [App\Http\Controllers\RegistrationFormController::class, 'showFormDetail'])->name('dashboard.registrations.form_detail');
     });

Route::group(['middleware' => 'admin'], function() {
    Route::get('/dashboard/registrations_admin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard.registrations_admin.index');
    Route::put('/dashboard/registrations_admin/validate-form/{form}', [App\Http\Controllers\AdminController::class, 'validateForm'])->name('dashboard.registrations_admin.validate_form');
    Route::get('/dashboard/registrations_admin/form-detail/{form}', [App\Http\Controllers\AdminController::class, 'showFormDetail'])->name('dashboard.registrations_admin.form_detail');
});