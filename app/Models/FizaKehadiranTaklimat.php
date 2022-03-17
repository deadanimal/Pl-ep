<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FizaPembelianSebutTender;


class FizaKehadiranTaklimat extends Model
{
    use HasFactory;

    public function pst()
    {
        return $this->belongsTo(FizaPembelianSebutTender::class);
    }
}
