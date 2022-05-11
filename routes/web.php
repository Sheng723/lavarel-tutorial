<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\NotesController;
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

Route::get('/',[PagesController::class, 'home']);
Route::get('about',[PagesController::class, 'about']);

Route::get('cards', [CardsController::class, 'index']);
Route::get('cards/{card}', [CardsController::class, 'show']);
Route::post('cards/{card}/notes', [NotesController::class, 'store']);
/*Route::get('posts/{post} ', function($slug){
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    
    if(! file_exists($path)){
        //dd('404');
        //ddd('ncie');
        abort(404);
        //return redirect('/');
    }
    $post = file_get_contents($path);
    return view('post',[
        'post' => $post
    ]);
});*/


/*Route::get('about', function(){
    return view('posts/first-post.html');
});*/
