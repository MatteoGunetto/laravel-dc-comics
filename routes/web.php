<?php
use Illuminate\Support\Facades\Route;
// importo Controller
use App\Http\Controllers\MainController;
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
Route::get('/', function () {
    return view('home');
});

// creo nuova Route:resourse così da avere a disposizione
// tutte le rotte per le funzioni del controller

Route::resource('comics', MainController::class);
