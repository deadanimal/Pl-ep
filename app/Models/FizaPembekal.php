<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaPembekal extends Model
{
    use HasFactory;

    public function iteminfo()
    {
        return $this->hasMany(FizaItemInfo::class);
    }

    public function jawatankuasa()
    {
        return $this->hasOne(FizaJawatankuasa::class);
    }
}
