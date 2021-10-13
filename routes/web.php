<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FizaKodBidangController;
use App\Http\Controllers\FizaPelanPerancanganPerolehanController;
use App\Http\Controllers\FizaPembekalController;
use App\Http\Controllers\FizaRolesController;
use App\Http\Controllers\FizaEpUserController;
use App\Http\Controllers\FizaUserRoleController;



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
Route::resource('/KodBidang',FizaKodBidangController::class);
Route::resource('/PelanPerancanganPerolehan',FizaPelanPerancanganPerolehanController::class);
Route::resource('/Pembekal',FizaPembekalController::class);
Route::resource('/Roles',FizaRolesController::class);
Route::resource('/Roles',FizaEpUserController::class);

Route::get('/indexpengesah', [FizaPelanPerancanganPerolehanController::class,'indexpengesah']);
Route::get('/editpengesah/{id}', [FizaPelanPerancanganPerolehanController::class,'editpengesah']);
Route::post('/updatepengesah', [FizaPelanPerancanganPerolehanController::class,'updatepengesah']);



Route::get('/indexpelulus',[FizaPelanPerancanganPerolehanController::class,'indexpelulus']);
Route::get('/editpelulus/{id}',[FizaPelanPerancanganPerolehanController::class,'editpelulus']);
Route::post('/updatepelulus',[FizaPelanPerancanganPerolehanController::class,'updatepelulus']);



// Route::resource('/ArahanBerhenti', ArahanBerhentiController::class);
// Route::resource('/AuditLog', AuditLogController::class);
// Route::resource('/Kontrak', KontrakController::class);
// Route::resource('/KontrakPenamatan', KontrakPenamatanController::class);
// Route::resource('/ArahanBerhenti', ArahanBerhentiController::class);
// Route::resource('/KontrakPerjanjian', KontrakPerjanjianController::class);
// Route::resource('/KontrakPerjanjianPindaan', KontrakPerjanjianPindaanController::class);
// Route::resource('/News', NewsController::class);
// Route::resource('/NotaDebit', NotaDebitController::class);
// Route::resource('/KontrakPerjanjian', KontrakPerjanjianController::class);
// Route::resource('/Notahhantar', NotahhantarController::class);
// Route::resource('/NotaTerima', NotaTerimaController::class);
// Route::resource('/Notification', NotificationController::class);
// Route::resource('/PadananBayaran', PadananBayaranController::class);
// Route::resource('/Pembekal', PembekalController::class);
// Route::resource('/PerancanganPerolehan', PerancanganPerolehanController::class);
// Route::resource('/PermintaanKontrak', PermintaanKontrakController::class);
// Route::resource('/PermintaanPembelian', PermintaanPembelianController::class);
// Route::resource('/RoleUser', RoleUserController::class);
// Route::resource('/SebutHargaTenderCadangan', SebutHargaTenderCadanganController::class);
// Route::resource('/SebutHargaTender', SebutHargaTenderController::class);
// Route::resource('/SebutHargaTenderIklan', SebutHargaTenderIklanController::class);
// Route::resource('/SebutHargaTenderJadual', SebutHargaTenderJadualController::class);
// Route::resource('/SebutHargaTenderKehadiran', SebutHargaTenderKehadiranController::class);
// Route::resource('/SebutHargaTenderKodItem', SebutHargaTenderKodItemController::class);
// Route::resource('/SebutHargaTenderLawatan', SebutHargaTenderLawatanController::class);
// Route::resource('/SebutHargaTenderNotaMinta', SebutHargaTenderNotaMintaController::class);
// Route::resource('/SebutHargaTenderPemilihan', SebutHargaTenderPemilihanController::class);
// Route::resource('/SebutHargaTenderSemakanCadangan', SebutHargaTenderSemakanCadanganController::class);
// Route::resource('/SebutHargaTenderSpesifikasi', SebutHargaTenderSpesifikasiController::class);
// Route::resource('/SebutHargaTenderSst', SebutHargaTenderSstController::class);
// Route::resource('/SebutHargaTenderSuratNiat', SebutHargaTenderSuratNiat::class);


Route::get('/', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
