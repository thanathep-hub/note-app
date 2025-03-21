<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', [NoteController::class, 'index']);
Route::resource('notes', NoteController::class);