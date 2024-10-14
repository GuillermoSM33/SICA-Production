<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'inicio'])->name('inicio');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');

Route::get('/contacto', [ContactoController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'send'])->name('contact.send');

/* Route::resource('emails', EmailController::class); */

Route::get('/buscar', [IndexController::class, 'buscador'])->name('buscador');

Route::get('/autocomplete', [IndexController::class, 'autocomplete'])->name('autocomplete');

Route::get('/servicios', [ServicioController::class, 'servicios'])->name('servicios');

Route::get('/osmosis', [ServicioController::class, 'servicios_osmosis'])->name('osmosis');

Route::get('/mantenimiento_MBA', [ServicioController::class, 'mantenimiento_MBA'])->name('mantenimiento_MBA');

Route::get('/PTAR', [ServicioController::class, 'ptar'])->name('PTAR');

Route::get('/desgacificadora', [ServicioController::class, 'desgacificadora'])->name('desgacificadora');

Route::get('/constante', [ServicioController::class, 'constante'])->name('constante');

Route::get('/enfriamiento', [ServicioController::class, 'enfriamiento'])->name('enfriamiento');

Route::get('/electricos', [ServicioController::class, 'electricos'])->name('electricos');

Route::get('/piscinas', [ServicioController::class, 'piscinas'])->name('piscinas');

Route::get('/purificar', [ServicioController::class, 'purificar'])->name('purificar');

Route::get('/limpieza', [ServicioController::class, 'limpieza'])->name('limpieza');

Route::get('/otros', [ServicioController::class, 'otros'])->name('otros');

Route::get('/productos', function () { return view('productos');});

Route::get('/catalogos', [PDFController::class, 'showPDFs'])->name('catalogos');

Route::get('storage-link', function(){
   if (file_exists(public_path('storage'))) {
       return 'Ya existe';
   }

   app('files')->link(
       storage_path('app/public'), public_path('storage')
       );

    return 'LO CREASTE';
});

Route::middleware(['auth', 'role:admin,admin_sistema'])->group(function () {
    Route::get('/emails', [EmailController::class, 'index'])->name('emails.index');
    Route::get('/emails/create', [EmailController::class, 'create'])->name('emails.create');
    Route::post('/emails', [EmailController::class, 'store'])->name('emails.store');
    Route::get('/emails/{id}/edit', [EmailController::class, 'edit'])->name('emails.edit');
    Route::put('/emails/{id}', [EmailController::class, 'update'])->name('emails.update');
    Route::delete('/emails/{id}', [EmailController::class, 'destroy'])->name('emails.destroy');
});

Route::middleware(['auth', 'role:admin,admin_sistema'])->group(function () {
    Route::get('/subir-catalogos', [PDFController::class, 'managePDFs'])->name('subir.catalogos');
    Route::post('/upload.pdf', [PDFController::class, 'uploadPDF'])->name('upload.pdf');
    Route::delete('/delete-pdf/{id}', [PDFController::class, 'deletePDF'])->name('delete.pdf');
    Route::put('/update-pdf/{id}', [PDFController::class, 'updatePDF'])->name('update.pdf');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware(['auth', 'role:admin,admin_sistema'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
