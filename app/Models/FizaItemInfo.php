<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaItemInfo extends Model
{
    use HasFactory;

    public function katalog()
    {
        return $this->belongsTo(FizaItemInfo::class);
    }
}
