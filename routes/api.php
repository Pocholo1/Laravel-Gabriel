<?php
use App\Http\Controllers\Auth\ControladorCliente;
use Illuminate\Support\Facades\Route;

Route::post('/register', [ControladorCliente::class, 'register']);
Route::get('/usuarios', function () {
    return ['Hola, Soy Juan Gabriel'];
});
