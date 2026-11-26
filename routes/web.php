
<?php

use Illuminate\Support\Facades\Route;

// Página inicial de apresentação institucional do EcoLink
Route::view('/', 'welcome')->name('home');

// Páginas inexistentes retornam o erro 404 padrão do Laravel
Route::fallback(function () {
    abort(404);
});
