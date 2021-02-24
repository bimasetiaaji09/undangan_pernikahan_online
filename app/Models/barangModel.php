<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangModel extends Model
{
    use HasFactory;

    protected $table        = "barang";
    protected $fillable     = ["nama_barang","harga"];
    protected $primaryKey   = "id_barang";
    public $dates           = ["updated_at","created_at"];
}

// note
// table barang ::

// id_barang
// nama_barang
// harga
// created_at
// updated_at