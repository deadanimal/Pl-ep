<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaPenyediaanSpesifikasi;

class FizaJawatankuasa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function sebuthargatender()
    {
        return $this->belongsTo(FizaPembelianSebutTender::class,'pst_id','id');
    }

}
