<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaKatalog extends Model
{
    use HasFactory;

    public function itemInfo()
    {
        return $this->hasMany(fizaItemInfo::class);
    }
}
