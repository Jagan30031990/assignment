<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SocialiteAuthController;
use App\Http\Controllers\ExportIndiaController;

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

});

Route::get('/morePosts', [LoginController::class, 'morePosts'])->name('users.morePosts');

Route::get('google', [SocialiteAuthController::class, 'googleRedirect'])->name('auth/google');
Route::get('/auth/google-callback', [SocialiteAuthController::class, 'loginWithGoogle']);

Route::get('/refresh_captcha', [LoginController::class, 'refresh_captcha'])->name('users.captcha');
Route::get('/', [LoginController::class, 'index'])->name('admin.login');
Route::get('/export_india', [ExportIndiaController::class, 'show'])->name('users.export');
Route::post('chklogin', [LoginController::class, 'chklogin'])->name('admin.chklogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::post('/store', [SignupController::class, 'register'])->name('user.register');


Route::view('/password-reset', 'authentication.password_reset')->name('authentication.password_reset');
Route::view('/sign-up', 'authentication.sign_up')->name('authentication.sign_up');
Route::view('/sign-in', 'authentication.sign_in')->name('authentication.sign_in');
Route::view('/new-password', 'authentication.new_password')->name('authentication.new_password');

Route::view('/company-details', 'webViews.profiles.company_details')->name('webViews.profiles.company_details');
Route::view('/myprofile', 'webViews.profiles.my_profile')->name('webViews.profiles.my_profile');
Route::view('/demo', 'webViews.profiles.demo')->name('webViews.profiles.demo');
Route::view('/edit-profile', 'webViews.profiles.edit_profile')->name('webViews.profiles.edit_profile');
Route::view('/myteams', 'webViews.my_team')->name('webViews.my_team');
Route::view('/my-exim-space', 'webViews.myworkspaces')->name('webViews.myworkspaces');
Route::view('/shared-workspaces', 'webViews.shared_workspaces')->name('webViews.shared_workspaces');
Route::view('/delete-workspaces', 'webViews.workspace_trash')->name('webViews.workspace_trash');
Route::view('/database-updates', 'webViews.database_updates')->name('webViews.database_updates');
Route::view('/system-generated', 'webViews.system_generated')->name('webViews.system_generated');


/*Home tabs link*/
Route::view('/global-search', 'webViews.global_search')->name('webViews.global_search');
Route::view('/advance-search', 'webViews.advance_search')->name('webViews.advance_search');
Route::view('/hot-products', 'webViews.hot_products')->name('webViews.hot_products');