<?php
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

# route view my notes 
Route::get('/mynotes', [NotesController::class,'mynotes'])->name('mynotes');
  
#CRUD

# route that return the user's notes to the view 
Route::get('/view/{id}', [NotesController::class,'view'])->name('view');

# return creating note view
Route::get('/create', [NotesController::class,'create'])->name('create');

# stores the new note
Route::post('/store', [NotesController::class,'store'])->name('store');

# deletes the note that the user selected
Route::delete('delete/{id}', [NotesController::class,'delete'])->name('delete');

# return the note that the user selected to be updated
Route::get('view/edit/{id}', [NotesController::class,'edit'])->name('edit');

# update the note that the user selected
Route::patch('/update', [NotesController::class,'update'])->name('update');



