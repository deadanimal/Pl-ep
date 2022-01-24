<?php

namespace App\Models;
use App\Models\FizaItemInfo;
use App\Models\FizaKatalog;
use App\Models\FizaPembekal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaItemInfo extends Model
{
    use HasFactory;

    public function katalog()
    {
        return $this->belongsTo(FizaKatalog::class);
    }

    public function pembekal()
    {
        return $this->belongsTo(FizaPembekal::class);
    }

    

}
