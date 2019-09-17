<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanAnggaran extends Model
{
    public $table = "pengajuan_anggaran";

    public $fillable = [
        'id_coa',
        'nominal_anggaran',
        'keterangan_anggaran'
    ]

    
    public function coa(){
        return $this->belongsTo('App\Models\COA','id_coa','id_coa');
    }
}
