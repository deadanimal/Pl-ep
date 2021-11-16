<?php

namespace App\Models;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaPenyediaanSpesifikasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaPenyediaanSpesifikasi extends Model
{
    use HasFactory;

    public function pembeliansebutharga()
    {
        return $this->belongsTo(FizaPembelianSebutTender::class);
    }
}
