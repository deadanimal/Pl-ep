<?php

namespace App\Models;
use App\Models\FizaItemInfo;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaKatalog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaKatalog extends Model
{
    use HasFactory;

    public function itemInfo()
    {
        return $this->hasMany(fizaItemInfo::class);
    }

    public function pst()
    {
        return $this->hasOne(FizaPembelianSebutTender::class);
    }
}
