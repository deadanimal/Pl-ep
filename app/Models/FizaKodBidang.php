<?php

namespace App\Models;
use App\Models\FizaPembekal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizaKodBidang extends Model
{
    use HasFactory;

    public function pembekal()
    {
        return $this->belongsToMany(FizaPembekal::class);
    }


}
