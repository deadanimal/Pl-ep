<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditLogController;
use App\Models\User;
use App\Models\FizaFaq;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\FizaKodBidangController;
use App\Http\Controllers\FizaPelanPerancanganPerolehanController;
use App\Http\Controllers\FizaPembekalController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\FizaEpUserController;
use App\Http\Controllers\FizaUserRoleController;
use App\Http\Controllers\FizaArahanMemberhentikanController;
use App\Http\Controllers\FizaAuditPelanController;
use App\Http\Controllers\FizaPenyediaanSpesifikasiController;
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
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\ItemKartController;
use App\Http\Controllers\UserPembekalController;
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


Route::get('/list-role',[RegisteredUserController::class,'list_role']);

Route::get('/register-role', function(){
    $role= Roles::all();
    $user = User::all();

    return view('role_register',[
        'role'=>$role,
        'user' =>$user
    ]);
});
Route::post('/daftar-role',[RegisteredUserController::class,'register_roles']);
Route::get('/update-role/{id}', function(){
    $user = User::find($id);
    $user->roles();

    return view('role_update',[
        'role'=>$role,
         'user'=>$user
    ]);
});
Route::post('/kemaskini-role',[RegisteredUserController::class,'update_roles']);
// Route::('/delete-user/{id}',[PenggunaController::class,'delete_user']);

Route::post('/dokumentambahan',[FizaPembekalController::class,'dokumentambahan']);
Route::get('/insertfile/{id}',[FizaPembekalController::class,'insertfile']);


Route::post('/docmof',[FizaPembekalController::class,'docmof']);
Route::get('/mof/{id}',[FizaPembekalController::class,'mof']);

Route::post('/doccidb',[FizaPembekalController::class,'doccidb']);
Route::get('/cidb/{id}',[FizaPembekalController::class,'cidb']);

Route::get('/listkatalog/{id}',[FizaKatalogController::class,'listkatalog']);

Route::get('/ItemInfo/addcart/{ItemInfo}', [FizaItemInfoController::class, 'addcart']);
Route::get('/ItemKart/removecart/{id}', [FizaItemInfoController::class, 'removecart']);
Route::resource('/ItemKart',ItemKartController::class);


Route::get('/indexpengesah', [FizaPelanPerancanganPerolehanController::class,'indexpengesah']);
Route::get('/editpengesah/{id}', [FizaPelanPerancanganPerolehanController::class,'editpengesah']);
Route::put('/updatepengesah', [FizaPelanPerancanganPerolehanController::class,'updatepengesah']);

Route::get('/indexpelulus',[FizaPelanPerancanganPerolehanController::class,'indexpelulus']);
Route::get('/editpelulus/{id}',[FizaPelanPerancanganPerolehanController::class,'editpelulus']);
Route::put('/updatepelulus',[FizaPelanPerancanganPerolehanController::class,'updatepelulus']);

Route::resource('/SuratNiat',FizaSenaraiSuratNiatController::class);
Route::resource('/Pembekal',FizaPembekalController::class);
Route::resource('/Pengguna', PenggunaController::class);
Route::post('/TetapanPengguna/{id}',[PenggunaController::class,'update_password']);




Route::group(['middleware' => ['auth']],function(){

    Route::resource('/KodBidang',FizaKodBidangController::class);
    Route::resource('/PelanPerancanganPerolehan',FizaPelanPerancanganPerolehanController::class);

    Route::resource('/PenyediaanSpesifikasi',FizaPenyediaanSpesifikasiController::class);
    Route::resource('/SijilDigital',FizaSijilDigitalController::class);
    Route::resource('/faq',FizaFaqController::class);
    Route::resource('/Docs',FizaDocsController::class);
    Route::resource('/NotificationCenter',FizaNotificationCenterController::class);
    Route::resource('/TetapanTempoh',FizaTetapanTempohController::class);
    Route::resource('/SupportingDocPembekal',FizaSupportingDocumentPembekalController::class);
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
    Route::resource('/PesananPenghantaran',FizaPesananPenghantaranController::class);
    Route::resource('/PerincianPengiklanan',FizaPerincianPengiklananController::class);
    Route::resource('/PesananPenghantaran',FizaPesananPenghantaranController::class);
    Route::resource('/PerjanjianKontrak',FizaPerjanjianKontrakController::class);
    Route::resource('/PertanyaanItem',FizaPertanyaanItemController::class);
    Route::resource('/PesananTempatan',FizaPesananTempatanController::class);
    Route::resource('/SenaraiSemakStandard',FizaSenaraiSemakStandardController::class);
    Route::resource('/SuratSetujuTerima',FizaSuratSetujuTerimaController::class);
    Route::resource('/Roles',RolesController::class);
    Route::resource('/User',UserPembekal::class);
    Route::get('/Jawatankuasa/pst/{id}',[FizaJawatankuasaController::class,'create']);
    Route::get('/Jawatankuasa/pst/{id}/edit',[FizaJawatankuasaController::class,'edit']);
    Route::get('/PenyediaanSpesifikasi/{id}/create',[FizaPenyediaanSpesifikasiController::class,'create']);
    Route::get('/KehadiranTaklimat/{id}/create',[FizaKehadiranTaklimatController::class,'create']);
    Route::get('/JadualPemenuhan/{id}/create',[FizaJadualPemenuhanController::class,'create']);

    Route::get('/kelulusan-spesifikasi', function(){
        $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasiController::all();
    
        return view('1_penyediaan_spesifikasi.index_kelulusan',[
            'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi 
        ]);
    });



   
});

Route::get('/cetak-pelan/{id}',[FizaPelanPerancanganPerolehan::class,'cetakpelan']);
// Route::resource('/ArahanBerhenti', ArahanBerhentiController::class);
Route::resource('/AuditLog', AuditLogController::class);
Route::post('/log',[AuditLogController::class,'log']);




Route::get('/', function () {
    $faq= FizaFaq::where('faq_status','aktif')->get();
    return view(
        'index',[
        'faq'=>$faq 
        ]);
});



Route::get('2', function () {
    return view('layouts.base2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');   

require __DIR__.'/auth.php';


Route::get('/comparison/{barang_1}/{barang_2}/{barang_3}', [FizaKatalogController::class, 'compare_barang']);

Route::post('/edit_password/{id}',[PenggunaController::class,'update_password']);

Route::get('/kemaskini-maklumat/{id}', [PenggunaController::class,'edit_user']);
Route::any('/kemaskini-pengguna/{id}', [PenggunaController::class,'update_user']);
Route::get('/KatalogBelian/{id}',[FizaItemInfoController::class,'katalog_belian']);
Route::get('/SenaraiKatalog',[FizaItemInfoController::class,'listitem']);

Route::get('/ItemKart/{id}',[ItemKartController::class,'index']);
