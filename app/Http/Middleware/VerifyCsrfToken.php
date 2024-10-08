<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    protected $except = [
        'api/*', // Excepción para todas las rutas de API
        'register', // Excepción específica para la ruta de registro (si la necesitas)
    ];
}
