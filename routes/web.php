<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



 Route::view('/', 'welcome')->name('home') ;
Route::view('/contacto', 'contacto')->name('contac') ;

/*Route::get('/blog', [PostController::class , 'index' ])->name('posts.index');
Route::get('/blog/create', [PostController::class , 'create' ])->name('posts.create');
Route::post('/blog/store', [PostController::class , 'store' ])->name('posts.store');


Route::get('/blog/{post}', [PostController::class , 'show' ])->name('posts.show');
Route::delete('/blog/{post}', [PostController::class , 'destroy' ])->name('posts.destroy');
Route::patch('/blog/{post}', [PostController::class , 'update' ])->name('posts.update');
Route::get('/blog/{post}/edit', [PostController::class , 'edit' ])->name('posts.edit');*/

Route::view('/about', 'about')->name('about');

Route::get('/login', function(){
    return "no estas logueado";
})->name('login');

Route::resource('blog', PostController::class ,[
    'names' => 'posts',
    'parameters' => ['blog' => 'post' ]
] );


