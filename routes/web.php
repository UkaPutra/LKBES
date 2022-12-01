<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\TarikController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login','showLoginForm')->name('login');
        Route::post('/login','login');
        Route::get('/register','ShowRegister');
        Route::post('/register','register');
    });
});


Route::middleware('auth')->group(function(){

    Route::controller(AuthController::class)->group(function(){
        Route::get('/logout', 'logout');
        Route::get('/ubah','changePasswordForm');
        Route::post('/ubah','changePassword');
        Route::get('/pengaturan','pengaturan');
        Route::post('/pengaturan','changeName');
    });

    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard','dashboard');
        Route::get('/profile','profile');

    });

    Route::controller(StudentController::class)->group(function(){
        Route::get('/tambah_siswa','addStudentForm');
        Route::post('/tambah_siswa','addStudent');
        Route::get('/daftar_siswa','index');
        Route::get('/edit_siswa/{id}','edit');
        Route::post('/edit_siswa/{id}','update');
        Route::get('/detail/{id}','detail');
        Route::get('/hapus_siswa/{id}','destroy');

    });

    Route::controller(SetorController::class)->group(function(){
        Route::get('/setor','setor');
        Route::post('/setor','addSetor');
        Route::get('/daftar_setor','daftarSetor');
        Route::get('/edit_setor/{id}','edit');
        Route::post('/edit_setor/{id}','update');
        Route::get('/hapus_setor/{id}','destroy');
    });

    Route::controller(TarikController::class)->group(function(){
        Route::get('/tarik','tarik');
        Route::post('/tarik','addTarik');
        Route::get('/daftar_tarik','daftarTarik');
        Route::get('/edit_tarik/{id}','edit');
        Route::post('/edit_tarik/{id}','update');
        Route::get('/hapus_tarik/{id}','destroy');
    });

    Route::controller(TransactionController::class)->group(function(){
        Route::get('/saldo','index');
        Route::get('/detail_saldo/{id}','detail');
    });

});
