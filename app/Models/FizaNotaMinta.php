<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FizaKart;


class FizaNotaMinta extends Model
{
    use HasFactory;

    public function kart()
    {
        return $this->hasOne(FizaKart::class);
    }   
}
