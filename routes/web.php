<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/contact', 'FrontendController@contact');
Route::get('/posts/{post}', 'PageController@showPost')->name('posts.view');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', 'UserController');

    Route::resource('permission', 'PermissionController');


    Route::get('/profile', 'UserController@profile')->name('user.profile');

    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');

    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');

    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');

    // Settings Controller
    Route::prefix('setting')->group(function () {
        Route::get('/website-setting/edit', 'SettingController@edit')->name('website-setting.edit');
        Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
    });

    Route::resource('posts','PostController');
    Route::resource('categories','CategoryController')->except('show');
    Route::get('/update/password', 'SettingController@settingPassword')->name('website-password.update');
    Route::post('/setting-update/password', 'SettingController@updatePassword')->name('setting.password.update');
    Route::get('/settings-logout', 'SettingController@perform')->name('logout.perform');

    // Services
Route::prefix('services')->group(function () {
    Route::get('/', 'ServiceController@index')->name('services.index');
    Route::get('/create', 'ServiceController@create')->name('services.create');
    Route::post('/store', 'ServiceController@store')->name('services.store');
    Route::get('/delete/{id}', 'ServiceController@delete')->name('service.delete');
    Route::get('/{id}', 'ServiceController@edit')->name('service.edit');
    Route::post('/update/{id}', 'ServiceController@update')->name('service.update');
});

// Projects
Route::prefix('project')->group(function () {
    Route::get('/', 'ProjectController@index')->name('project.index');
    Route::get('/create', 'ProjectController@create')->name('project.create');
    Route::post('/store', 'ProjectController@store')->name('project.store');
    Route::post('/update/{id}', 'ProjectController@update')->name('project.update');
    Route::get('/edit/{id}', 'ProjectController@edit')->name('project.edit');
    Route::get('/view/{id}', 'ProjectController@projectView')->name('project.view.admin');
    Route::get('/delete/{id}', 'ProjectController@projectDelete')->name('project.gallery.delete');

    // Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
    // Route::get('/website-setting/edit', 		 [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('website-setting.edit');
    // Route::post('/website-setting/update/{id}',  [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('website-setting.update');
});

});

Route::group(['middleware' => ['auth', 'role_or_permission:admin|create role|create permission']], function() {

Route::resource('role', 'RoleController');

});

Auth::routes();


//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');


