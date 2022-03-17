<?php

namespace App\Models;
use App\Models\FizaJawatankuasa;
use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\FizaPerinicianPengiklanan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaPembelianSebutTender extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jawatankuasa()
    {
        return $this->hasOne(FizaJawatankuasa::class,'id','pst_id');
    }

    public function penyediaanSpesifikasi()
    {
        return $this->hasOne(FizaPenyediaanSpesifikasi::class,'id','pst_id');
    }

    public function perincianpengiklanan()
    {
        return $this->hasOne(FizaPerinicianPengiklanan::class,'pst_id','id');
    }


    public function kehadirantaklimat()
    {
        return $this->hasMany(FizaKehadiranTaklimat::class,'pst_id','id');
    }

}
