<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FizaItemInfo;

class FizaKart extends Model
{
    use HasFactory;

    public function iteminfo()
    {
        return $this->belongsToMany(FizaItemInfo::class);
    }    
}
