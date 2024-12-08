<?php

use App\Http\Controllers\admin\aboutcontroller;
use App\Http\Controllers\admin\admincontroller;
use App\Http\Controllers\admin\categorycontroller;
use App\Http\Controllers\admin\commentcontroller;
use App\Http\Controllers\admin\footercontroller;
use App\Http\Controllers\admin\gallerycontroller;
use App\Http\Controllers\admin\menucontroller;
use App\Http\Controllers\admin\procontroller;
use App\Http\Controllers\admin\productcontroller;
use App\Http\Controllers\front\indexcontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;





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

Route::get('/',[indexcontroller::class,'index'] )->name('company.index');
route::get('/categores/{id}',[indexcontroller::class,'pro'])->name('index.pro');

Auth::routes();
route::get('/company',[admincontroller::class,'index'])->name('admin.index')->middleware('auth');
// seo store
route::post('/store',[admincontroller::class,'store'])->name('seo.store');
// seo store
// seo showseo
route::get('/soe',[admincontroller::class,'showseo'])->name('show.seo');
// seo showseo
// seo destroy
route::delete('/destroy/{id}',[admincontroller::class,'destroy'])->name('destroy.seo');
// seo destroy
// ************menu************
  route::resource('/menu',menucontroller::class)->parameters(['menu'=>'id']);
// ************end menu************
// ************about************
route::resource('/about',aboutcontroller::class)->parameters(['about'=>'id']);
// ************end about************
// ************gallery************
route::resource('/gallery',gallerycontroller::class)->parameters(['gallery'=>'id']);
// ************end gallery************
// ************category************
route::resource('/category',categorycontroller::class)->parameters(['category'=>'id']);
// ************end category************
// ************rnd produact************
route::resource('/product',productcontroller::class)->parameters(['product'=>'id']);
// ************end produact************
// ************comment************
// route::get('/comments',[commentcontroller::class,'index'])->name('comment.index');
route::post('/comments',[indexcontroller::class,'ajax'])->name('comment.ajax');
route::get('/comment',[commentcontroller::class,'index'])->name('comment.index');
route::delete('/comment/{id}',[commentcontroller::class,'delete'])->name('comment.delete');
// ************end comment************
// ************footer************
route::resource('/footer',footercontroller::class)->parameters(['footer'=>'id']);
// ************end footer************









