<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FizaPembelianSebutTender;

class FizaJawatankuasa extends Model
{
    use HasFactory;

    public function sebuthargatender()
    {
        return $this->hasOne(FizaPembelianSebutTender::class);
    }
}
