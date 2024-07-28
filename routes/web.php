<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\AnnounceController2;
use App\Http\Controllers\PostuleController;
use App\Models\Announce2;
use App\Models\Announce;
use App\Models\Ville;
use Illuminate\Http\Request;

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
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/', function () {
    $announces=Announce::all();

    return view('welcome',compact('announces'));
})->name('welcome');
Route::get('/postuler', function () {
    $villes=Ville::all();
    return view('postuler',compact('villes'));
})->name('postuler');
Route::post('/store3',[PostuleController ::class,'store3'])->name('store3');
Route::get('/search3', function (Request $request) {
    if($request->search3){
        $searcha3=Announce2::where('poste2','LIKE','%'.$request->search3.'%')->latest()->paginate(15);
        return view('search3',compact('searcha3'));
           }else{
            return redirect()->back();
   }
    //return view('search3',compact('announce2s'));
})->name('search3');
Route::get('/admin/dashboard/create',[AnnounceController ::class,'create'])->name('create');
Route::post('/admin/dashboard/store',[AnnounceController ::class,'store'])->name('store');
Route::get('/admin/dashboard/read',[AnnounceController ::class,'read'])->name('read');
Route::get('/admin/dashboard/{announce}/edit',[AnnounceController ::class,'edit'])->name('edit');
Route::get('/admin/dashboard/{announce}/delete',[AnnounceController ::class,'delete'])->name('delete');
Route::put('/admin/dashboard/{announce}',[AnnounceController ::class,'update'])->name('update');
Route::get('/admin/dashboard/search',[AnnounceController ::class,'search'])->name('search');
///////////////////////////////////////////////////////////////
Route::get('/dashboard/create2',[AnnounceController2 ::class,'create2'])->name('create2');
Route::post('/dashboard/store2',[AnnounceController2 ::class,'store2'])->name('store2');
Route::get('/dashboard/read2',[AnnounceController2 ::class,'read2'])->name('read2');
Route::get('/dashboard/{announce2}/edit2',[AnnounceController2 ::class,'edit2'])->name('edit2');
Route::get('/dashboard/{announce2}/delete2',[AnnounceController2 ::class,'delete2'])->name('delete2');
Route::put('/dashboard/{announce2}',[AnnounceController2 ::class,'update2'])->name('update2');
Route::get('/dashboard/search2',[AnnounceController2 ::class,'search2'])->name('search2');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';



