<?php

use DouglasMen\ExamplePackage\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/rota-de-exemplo', function () {
    return 'A rota está funcionando!!!';
});

Route::get('/contato', [ContatoController::class, 'index'])->name('form-contato');

Route::post('/contato', [ContatoController::class, 'store'])->name('contato');
