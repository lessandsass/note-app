<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

// Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
// Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
// Route::get('/note/{id}/show', [NoteController::class, 'show'])->name('note.show');
// Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
// Route::put('/note/{id}/update', [NoteController::class, 'update'])->name('note.update');
// Route::delete('/note/{id}/destroy', [NoteController::class, 'destroy'])->name('note.destroy');

Route::resource('note', NoteController::class);

