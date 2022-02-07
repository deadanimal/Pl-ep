<?php

namespace App\Models;
use App\Models\FizaJawatankuasa;
use App\Models\FizaKatalog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaPembelianSebutTender extends Model
{
    use HasFactory;

    public function jawatankuasa()
    {
        return $this->hasOne(FizaJawatankuasa::class);
    }

    public function katalog()
    {
        return $this->hasOne(FizaKatalog::class);
    }

    public function penyediaanSpesifikasi()
    {
        return $this->hasOne(FizaPenyediaanSpesifikasi::class); }
}
