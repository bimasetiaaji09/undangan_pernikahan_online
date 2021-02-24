<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdminModel extends Model
{
    use HasFactory;
    protected $table ="user_admin";
    protected $fillable = [
            "nama_user_admin",
            "username",
            "password"
    ];
    protected $primary = "id_user_admin";
    protected $dates = ["created_at","updated_at"];
}
