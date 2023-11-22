<?php

use App\Http\Controllers\AddProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\salary\ChartController;
use App\Http\Controllers\salary\StructureController;
use App\Http\Controllers\UserController;
use App\Models\salary\Structure;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('table', 'table');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard2', function () {
    return view('dashboard2');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::group([
    'controller'=>RoleController::class,
    'middleware'=>'auth',
],function (){

    Route::get('/roles','create')->name('view-roles');
    Route::get('/add/roles','add_roles')->name('create-roles');
    Route::post('/add/roles','store')->name('store-roles');
    Route::get('/edit/roles/{id}','edit')->name('edit-roles');
    Route::put('/update/roles/{id}','update')->name('update-roles');
    Route::get('/delete/roles/{id}','delete')->name('delete-roles');
    Route::delete('/delete/roles/{id}','destroy')->name('destroy-roles');
});


Route::group([
    'middleware'=>'auth',
    'controller'=>PermissionController::class,
],function (){
    Route::get('/permissions','create');
    Route::get('/add/permissions','add_permissions');
    Route::post('/add/permissions','store');
    Route::get('/edit/permission/{id}','edit');
    Route::put('/update/permission/{id}','update');
    Route::get('/delete/permission/{id}','delete');
    Route::delete('/delete/permission/{id}','destroy');
});

Route::group([
    'middleware'=>'auth',
    'controller'=>UserController::class,
],function (){
    Route::get('/users','create');
    Route::get('/add/users','add_user');
    Route::post('/add/users','store');
    Route::get('/edit/users/{id}','edit');
    Route::put('/update/users/{id}','update');
    Route::get('/delete/users/{user}','delete');
    Route::delete('/delete/users/{user}','destroy');
});

Route::group([
    'prefix'=>'profile',
    'controller'=> AddProfileController::class
],function (){
    Route::get('/add/{user}','add');

});


Route::view('/test','test');

Route::get('/salary/chart/add',[ChartController::class,'create']);
Route::post('/salary/chart/add',[ChartController::class,'store']);
Route::get('/salary/chart',[ChartController::class,'show']);
Route::get('/salary/chart/edit/{chart}',[ChartController::class,'edit']);
Route::put('/salary/chart/update/{chart}',[ChartController::class,'update']);
Route::get('/salary/chart/delete/{chart}',[ChartController::class,'delete']);
Route::delete('/salary/chart/delete/{chart}',[ChartController::class,'destroy']);

Route::get('/salary/structure',[StructureController::class,'show']);
Route::get('/salary/structure/add',[StructureController::class,'create']);
Route::post('/salary/structure/add',[StructureController::class,'store']);





















require __DIR__.'/auth.php';
