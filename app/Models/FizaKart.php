<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FizaItemInfo;
use App\Models\FizaNotaMinta;

class FizaKart extends Model
{
    use HasFactory;

    public function iteminfo()
    {
        return $this->belongsToMany(FizaItemInfo::class);
    }   

    public function notaMinta()
    {
        return $this->belongsTo(FizaNotaMinta::class);
    }
    
   
    
}
