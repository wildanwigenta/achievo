<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('tasks.index');
})->name('tasks.index');
Route::get('tasks', function () {
    return view('tasks.add_tugas');
})->name('tasks.add_tugas');
Route::get('tasks/edit/{id}', function ($id) {
    return view('tasks.edit_tugas', ['id' => $id]);
})->name('tasks.edit_tugas');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
