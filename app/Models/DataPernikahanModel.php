<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPernikahanModel extends Model
{
    use HasFactory;

    protected $table = "data_undangan_pernikahan";
    protected $fillable = [
        "mempelai_pria",
        "mempelai_wanita",
        "ayah_mempelai_pria",
        "ayah_mempelai_wanita",
        "ibu_mempelai_pria",
        "ibu_mempelai_wanita",
        "hari_resepsi",
        "tanggal_resepsi",
        "pukul_resepsi",
        "tempat_resepsi",
        "link_map_resepsi",
        "alamat_resepsi",
        "hari_akad_nikah",
        "tanggal_akad_nikah",
        "pukul_akad_nikah",
        "tempat_akad_nikah",
        "link_map_akad_nikah",
        "alamat_akad_nikah"
    ];
    protected $primary = "id_data_undangan_pernikahan";
    protected $dates = ["created_at","updated_at"];

}
