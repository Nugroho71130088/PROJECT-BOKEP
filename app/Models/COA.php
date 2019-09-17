<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class COA extends Model
{
    public $table = "coa_table";
    public $primaryKey = 'id_coa';

    public $fillable = [
        'kode_coa',
        'nama_coa'
    ]
}
