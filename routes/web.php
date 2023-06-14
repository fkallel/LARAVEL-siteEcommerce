<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/client/all',[ClientController::class,'index'])->name('clients.index');

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/products',[AdminController::class,'adminGetAllProducts'])->name('admin.products');
    Route::get('/contacts',[AdminController::class,'adminGetAllContacts'])->name('admin.contacts');
    Route::get('/panier-commands',[AdminController::class,'adminGetAllCommands'])->name('admin.panier');
    Route::get('/liste',[UserController::class,'liste']);
    Route::get('/search',[UserController::class,'search'])->name('users.search');



Route::delete('/products/{id}',[AdminController::class,'adminDeleteProduct'])->name('admin.products.delete');
Route::delete('/products/comments/{id}',[AdminController::class,'adminDeleteComment'])->name('admin.products.comments.delete');
Route::delete('/liste/{id}',[AdminController::class,'adminDeleteUser'])->name('admin.users.delete');

});

Route::get('/products',[ProductController::class,'index'])->name('products.index');

Route::get('/commandes_recues',[ProductController::class,'commandes_recues'])->name('product.commandes_recues');

Route::get('/panier',[ProductController::class,'panier'])->name('products.panier');
Route::get('/products/farah',[ProductController::class,'create'])->name('product.create');
Route::post('/products.store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');
Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::post('/products/update/{id}',[ProductController::class,'update'])->name('products.update');
 //comments
Route::post('/client/store',[ClientController::class,'store'])->name('clients.store');
//Route::get('/client/all',[ClientController::class,'index'])->name('clients.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/search',[ProductController::class,'search'])->name('products.search');




Route::post('dataInsert',[App\Http\Controllers\HomeController::class,'DataInsert']);


 Route::post('dataInsert2',[PanierController::class,'DataInsert']);


Route::get('/liste',[UserController::class,'liste']);

