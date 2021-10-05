<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/ArahanBerhenti', ArahanBerhentiController::class);
Route::resource('/AuditLog', AuditLogController::class);
Route::resource('/Kontrak', KontrakController::class);
Route::resource('/KontrakPenamatan', KontrakPenamatanController::class);
Route::resource('/ArahanBerhenti', ArahanBerhentiController::class);
Route::resource('/KontrakPerjanjian', KontrakPerjanjianController::class);
Route::resource('/KontrakPerjanjianPindaan', KontrakPerjanjianPindaanController::class);
Route::resource('/News', NewsController::class);
Route::resource('/NotaDebit', NotaDebitController::class);
Route::resource('/KontrakPerjanjian', KontrakPerjanjianController::class);
Route::resource('/Notahhantar', NotahhantarController::class);
Route::resource('/NotaTerima', NotaTerimaController::class);
Route::resource('/Notification', NotificationController::class);
Route::resource('/PadananBayaran', PadananBayaranController::class);
Route::resource('/Pembekal', PembekalController::class);
Route::resource('/PerancanganPerolehan', PerancanganPerolehanController::class);
Route::resource('/PermintaanKontrak', PermintaanKontrakController::class);
Route::resource('/PermintaanPembelian', PermintaanPembelianController::class);
Route::resource('/RoleUser', RoleUserController::class);
Route::resource('/SebutHargaTenderCadangan', SebutHargaTenderCadanganController::class);
Route::resource('/SebutHargaTender', SebutHargaTenderController::class);
Route::resource('/SebutHargaTenderIklan', SebutHargaTenderIklanController::class);
Route::resource('/SebutHargaTenderJadual', SebutHargaTenderJadualController::class);
Route::resource('/SebutHargaTenderKehadiran', SebutHargaTenderKehadiranController::class);
Route::resource('/SebutHargaTenderKodItem', SebutHargaTenderKodItemController::class);
Route::resource('/SebutHargaTenderLawatan', SebutHargaTenderLawatanController::class);
Route::resource('/SebutHargaTenderNotaMinta', SebutHargaTenderNotaMintaController::class);
Route::resource('/SebutHargaTenderPemilihan', SebutHargaTenderPemilihanController::class);
Route::resource('/SebutHargaTenderSemakanCadangan', SebutHargaTenderSemakanCadanganController::class);
Route::resource('/SebutHargaTenderSpesifikasi', SebutHargaTenderSpesifikasiController::class);
Route::resource('/SebutHargaTenderSst', SebutHargaTenderSstController::class);
Route::resource('/SebutHargaTenderSuratNiat', SebutHargaTenderSuratNiat::class);




























// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
