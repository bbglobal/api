<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseCase;

Route::get('/', [UseCase::class, 'useCases'])->name('use.case');
