<?php

namespace App\Models;
use App\Models\FizaKodBidang;
use App\Models\User;
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

    public function kod_bidang()
    {
        return $this->belongsToMany(FizaKodBidang::class);
    }

    public function user()
    {
        return $this-hasMany(User::class);
    }
}
