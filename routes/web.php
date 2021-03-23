<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::get('cursos', function () {
    return "Bienvenido a la pagina cursos";
});

// si la url no es cursos/create, pasará al siguiente Route

Route::get('cursos/create', function () {
    return "En esta pagina podrás crear un curso";
});

Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: $curso";
});
