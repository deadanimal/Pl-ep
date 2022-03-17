<?php

namespace App\Models;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaJadualPemenuhan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaPenyediaanSpesifikasi extends Model
{
    use HasFactory;

    public function pembeliansebutharga()
    {
        return $this->hasOne(FizaPembelianSebutTender::class('pst_id','id'));
    }

    public function jadualpemenuhan()
    {
        return $this->hasOne(FizaJadualPemenuhan::class('id','spesifikasi_id'));
    }
}
