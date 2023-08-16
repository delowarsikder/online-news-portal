<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

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
/*
 * Generate all routes of post 
 */
//Route for invoke method // home
Route::get('/', HomeController::class);

// Route::resource('post', PostController::class); 
//alternate way 

Route::prefix('/post')->group(function () {
  //GET 
  Route::get('/', [PostController::class, 'index'])->name('post.index');
  // Route::get('/post/{id}', [PostController::class, 'show'])->where('id', '[0-9]+');
  Route::get('/{id}', [PostController::class, 'show'])->name('post.show');
  // Route::get('/{id}', [PostController::class, 'show'])->whereNumber('id');
  // Route::get('/{name}',[PostController::class,'show'])->where('name','[A-Za-z]+');

  // Route::get('/{id}/{name}',[PostController::class,'show'])->where([
  //   'id' => '[0-9]+',
  //   'name' => '[A-Za-z]+'
  // ]);

  Route::get('/{id}/{number}', [PostController::class, 'show'])
    ->whereNumber('id')
    ->whereAlpha('name');

  //POST
  Route::get('/create', [PostController::class, 'create'])->name('post.create');
  Route::post('/', [PostController::class, 'store'])->name('post.store');

  //PUT or PATCH
  Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
  Route::patch('/{id}', [PostController::class, 'update'])->name('post.update');

  //DELETE
  Route::delete('/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});

Route::resource('/student', StudentController::class);




// Route::get('path','controller-file');

// Route::get('/about',function(){ //routing method-1
//     return view('about');
// });

Route::get("about/{data}", [About::class, 'index']);

// Route::view('contact','contact'); //routing method-2

Route::get('contactus/{name}', [ContactController::class, 'loadView']);




//Fallback Route 
Route::fallback(FallbackController::class);
