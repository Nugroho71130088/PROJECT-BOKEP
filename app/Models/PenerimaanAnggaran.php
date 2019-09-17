<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenerimaanAnggaran extends Model
{
    public $table ="penerimaan_anggaran";

    public $fillable = [
        'id_coa',
        'nominal_anggaran',
        'keterangan_anggaran',
    ]
}
