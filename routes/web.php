<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditLogController;
use App\Models\User;
use App\Models\FizaFaq;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FizaKodBidangController;
use App\Http\Controllers\FizaPelanPerancanganPerolehanController;
use App\Http\Controllers\FizaPembekalController;
use App\Http\Controllers\FizaRolesController;
use App\Http\Controllers\FizaEpUserController;
use App\Http\Controllers\FizaUserRoleController;
use App\Http\Controllers\FizaPenyediaanSpesifikasiController;
use App\Http\Controllers\FizaArahanMemberhentikanController;
use App\Http\Controllers\FizaAuditPelanController;
use App\Http\Controllers\FizaCadanganController;
use App\Http\Controllers\FizaDocsController;
use App\Http\Controllers\FizaFaqController;
use App\Http\Controllers\FizaInvoiceController;
use App\Http\Controllers\FizaItemInfoController;
use App\Http\Controllers\FizaJadualPemenuhanController;
use App\Http\Controllers\FizaJawatanKuasaController;
use App\Http\Controllers\FizaKandunganPerjanjianController;
use App\Http\Controllers\FizaKartController;
use App\Http\Controllers\FizaKatalogController;
use App\Http\Controllers\FizaKehadiranTaklimatController;
use App\Http\Controllers\FizaKontrakController;
use App\Http\Controllers\FizaLaporanController;
use App\Http\Controllers\FizaLaporanPelanController;
use App\Http\Controllers\FizaNotaMintaController;
use App\Http\Controllers\FizaNotaPenerimaanController;
use App\Http\Controllers\FizaNotificationCenterController;
use App\Http\Controllers\FizaPadananBayaranController;
use App\Http\Controllers\FizaPaymentController;
use App\Http\Controllers\FizaPembelianSebutTenderController;
use App\Http\Controllers\FizaPemilihanAkhirPembekalController;
use App\Http\Controllers\FizaPenandatanganKontrakController;
use App\Http\Controllers\FizaPengesyoranController;
use App\Http\Controllers\FizaPerincianPengiklananController;
use App\Http\Controllers\FizaPerjanjianKontrakController;
use App\Http\Controllers\FizaPermohonanKemaskiniProfilController;
use App\Http\Controllers\FizaPertanyaanItemController;
use App\Http\Controllers\FizaPesananPenghantaranController;
use App\Http\Controllers\FizaPesananTempatanController;
use App\Http\Controllers\FizaSenaraiSemakStandardController;
use App\Http\Controllers\FizaSenaraiSuratNiatController;
use App\Http\Controllers\FizaSijilDigitalController;
use App\Http\Controllers\FizaSupportingDocumentPembekalController;
use App\Http\Controllers\FizaSupportingDocumentSijilDigitalController;
use App\Http\Controllers\FizaSuratSetujuTerimaController;
use App\Http\Controllers\FizaTetapanTempohController;
use App\Http\Controllers\ItemKartController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Roles;


/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/KodBidang',FizaKodBidangController::class);
Route::resource('/PelanPerancanganPerolehan',FizaPelanPerancanganPerolehanController::class);
Route::resource('/Pembekal',FizaPembekalController::class);
Route::resource('/PenyediaanSpesifikasi',FizaPenyediaanSpesifikasiController::class);
Route::resource('/NotaPenerimaaan',FizaNotaPenerimaaanController::class);
Route::resource('/SijilDigital',FizaSijilDigitalController::class);
Route::resource('/faq',FizaFaqController::class);
Route::resource('/Docs',FizaDocsController::class);
Route::resource('/NotificationCenter',FizaNotificationCenterController::class);
Route::resource('/TetapanTempoh',FizaTetapanTempohController::class);
Route::resource('/SupportingDocPembekal',FizaSupportingDocumentPembekalController::class);
Route::resource('/SupportingDocKemaskiniProfil',FizaSupportingDocumentKemaskiniProfilController::class);
Route::resource('/SupportingDocSijilDigital',FizaSupportingDocumentSijilDigitalController::class);
Route::resource('/Payment',FizaPaymentController::class);
Route::resource('/PermohonanKemaskiniProfil',FizaPermohonanKemaskiniProfilController::class);
Route::resource('/Katalog',FizaKatalogController::class);
Route::resource('/ItemInfo',FizaItemInfoController::class);
Route::resource('/Invoice',FizaInvoiceController::class);
Route::resource('/LaporanPelan',FizaLaporanPelanController::class);
Route::resource('/Laporan',FizaLaporanController::class);
Route::resource('/ArahanMemberhentikan',FizaArahanMemberhentikanController::class);
Route::resource('/AuditPelan',FizaAuditPelanController::class);
Route::resource('/Cadangan',FizaCadanganController::class);
Route::resource('/JadualPemenuhan',FizaJadualPemenuhanController::class);
Route::resource('/Jawatankuasa',FizaJawatankuasaController::class);
Route::resource('/KandunganPerjanjian',FizaKandunganPerjanjianController::class);
Route::resource('/Kart',FizaKartController::class);
Route::resource('/KehadiranTaklimat',FizaKehadiranTaklimatController::class);
Route::resource('/Kontrak',FizaKontrakController::class);
Route::resource('/PenandatanganKontrak',FizaPenandatanganKontrakController::class);
Route::resource('/NotaPenerimaan',FizaNotaPenerimaanController::class);
Route::resource('/PadananBayaran',FizaPadananBayaranController::class);
Route::resource('/NotaMinta',FizaNotaMintaController::class);
Route::resource('/PemilihanAkhirPembekal',FizaPemilihanAkhirPembekalController::class);
Route::resource('/PembelianSebutTender',FizaPembelianSebutTenderController::class);
Route::resource('/Pengesyoran',FizaPengesyoranController::class);
Route::resource('/PerincianPengiklanan',FizaPerincianPengiklananController::class);
Route::resource('/PenyediaanSpesifikasi',FizaPenyediaanSpesifikasiController::class);
Route::resource('/PesananPenghantaran',FizaPesananPenghantaranController::class);
Route::resource('/PerincianPengiklanan',FizaPerincianPengiklananController::class);
Route::resource('/PesananPenghantaran',FizaPesananPenghantaranController::class);
Route::resource('/PerjanjianKontrak',FizaPerjanjianKontrakController::class);
Route::resource('/PertanyaanItem',FizaPertanyaanItemController::class);
Route::resource('/PesananTempatan',FizaPesananTempatanController::class);
Route::resource('/SenaraiSemakStandard',FizaSenaraiSemakStandardController::class);
Route::resource('/SuratNiat',FizaSuratNiatController::class);
Route::resource('/SuratSetujuTerima',FizaSuratSetujuTerimaController::class);

Route::get('/list-role',[RegisteredUserController::class,'list_role']);


Route::get('/register-role', function(){
    $role= Roles::all();

    return view('role_register',[
        'role'=>$role
    ]);
});
Route::post('/daftar-role',[RegisteredUserController::class,'register_roles']);

Route::get('/update-role/{id}', function(){
    $role= Roles::all(); 
    $user=User::all();

    return view('role_update',[
        'role'=>$role,
         'user'=>$user
    ]);
})->middleware(['auth']);


Route::post('/kemaskini-role',[RegisteredUserController::class,'update_roles']);


Route::post('/dokumentambahan',[FizaPembekalController::class,'dokumentambahan']);
Route::get('/insertfile',[FizaPembekalController::class,'insertfile']);


Route::post('/doc-mof',[FizaPembekalController::class,'docmof']);
Route::get('/mof',[FizaPembekalController::class,'mof']);

Route::post('/doc-cidb',[FizaPembekalController::class,'doccidb']);
Route::get('/cidb',[FizaPembekalController::class,'cidb']);

Route::get('/listkatalog/{id}',[FizaKatalogController::class,'listkatalog']);

Route::get('/ItemInfo/addcart/{ItemInfo}', [FizaItemInfoController::class, 'addcart']);
Route::get('/ItemKart/removecart/{itemKart}', [FizaItemInfoController::class, 'removecart']);
Route::resource('/ItemKart',ItemKartController::class);





Route::resource('/Roles',FizaEpUserController::class);

Route::get('/indexpengesah', [FizaPelanPerancanganPerolehanController::class,'indexpengesah']);
Route::get('/editpengesah/{id}', [FizaPelanPerancanganPerolehanController::class,'editpengesah']);
Route::post('/updatepengesah', [FizaPelanPerancanganPerolehanController::class,'updatepengesah']);



Route::get('/indexpelulus',[FizaPelanPerancanganPerolehanController::class,'indexpelulus']);
Route::get('/editpelulus/{id}',[FizaPelanPerancanganPerolehanController::class,'editpelulus']);
Route::post('/updatepelulus',[FizaPelanPerancanganPerolehanController::class,'updatepelulus']);



// Route::resource('/ArahanBerhenti', ArahanBerhentiController::class);
Route::resource('/AuditLog', AuditLogController::class);
Route::post('/log',[AuditLogController::class,'log']);
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
    $faq= FizaFaq::where('faq_status', 'aktif')->get();
    return view(
        'index',[
        'faq'=>$faq 
        ]);
});


Route::get('2', function () {
    $faq= FizaFaq::where('faq_status','aktif')->get();
    return view('test', [
        'faq'=>$faq
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/comparison/{barang_1}/{barang_2}/{barang_3}', [FizaKatalogController::class, 'compare_barang']);