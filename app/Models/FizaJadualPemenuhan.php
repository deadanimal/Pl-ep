<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FizaPenyediaanSpesifikasi;


class FizaJadualPemenuhan extends Model
{
    use HasFactory;


    public function penyediaanspesifikasi()
    {
        return $this->belongsTo(FizaPenyediaanSpesifikasi::class('spesifikasi_id','id'));
    }
}
