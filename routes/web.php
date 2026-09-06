<?php

use App\Livewire\Prism\TestPrism;
use Illuminate\Support\Facades\Route;
use Prism\Prism\Enums\Provider;
use Prism\Prism\Facades\Prism;

Route::view('/', 'welcome')->name('home');

Route::get('/prism', TestPrism::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
