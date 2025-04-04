<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\StorageController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('promosi', ResourceController::class);

// Rute untuk halaman utama
Route::get('/promosi', [ResourceController::class, 'index'])->name('promosi.index');

Route::get("/public/{filePath}", [StorageController::class, "index"])->name("image.show");

// Rute untuk halaman detail promosi
Route::get('/promosi/{id?}', [ResourceController::class, 'show'])->name('promosi.show');

// Rute untuk halaman tambah promosi
Route::get('/promosi/create', [ResourceController::class, 'create'])->name('promosi.create');
Route::post('/promosi', [ResourceController::class, 'store'])->name('promosi.store');

// Rute untuk halaman edit promosi
Route::get('/promosi/{id?}/edit', [ResourceController::class, 'edit'])->name('promosi.edit');
Route::post('/promosi/{id?}', [ResourceController::class, 'update'])->name('promosi.update');

// Rute untuk menghapus promosi
Route::delete('/promosi/{id?}', [ResourceController::class, 'destroy'])->name('promosi.destroy');