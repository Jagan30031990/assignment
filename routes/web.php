<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

//admin page
Route::prefix('admin')->middleware(['authenticated'])->group(function(){

Route::get('/home-page', [LoginController::class, 'home_page'])->name('admin.index');
Route::get('/home-page-user', [LoginController::class, 'user_dashboard'])->name('user.index.dashboard');

});
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::post('chklogin', [LoginController::class, 'chklogin'])->name('admin.chklogin');
Route::post('store-category', [CategoryController::class, 'store'])->name('store.category');
Route::post('store-subcategory', [SubcategoryController::class, 'store'])->name('store.sub.category');



Route::get('/get_search_data', [LoginController::class, 'filter_data'])->name('search.filter');





Route::get('/', [LoginController::class, 'index'])->name('admin.login');


// Route::get('/get-profile', [UserDataController::class, 'get_profile'])->name('profile.data');

// Route::get('/edit_profile', [UserDataController::class, 'edit_profile'])->name('edit.profile.data');

// Route::post('/update', [UserDataController::class, 'update'])->name('update.profile.data');

// Route::post('/email_verify', [UserDataController::class, 'email_verification'])->name('profile.email.verify');

// Route::get('account/verify/{token}', [UserDataController::class, 'verifyAccount'])->name('user.verify');


// Route::get('/verification_email', [UserDataController::class, 'index'])->name('user.verification.template'); 


// Route::get('/sign_up', [SignupController::class, 'index'])->name('user.signup'); 

Route::view('/sign-up', 'authentication.sign_up')->name('authentication.sign_up');
Route::view('/sign-in', 'authentication.sign_in')->name('authentication.sign_in');
