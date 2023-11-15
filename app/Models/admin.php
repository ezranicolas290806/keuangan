<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primarykey = 'id_admin';
    protected $fillable = [
        "id_admin",
        "nama",
        "no_telepon",
        "jenis_kelamin",
    ];
    public $timestamps = false;
}
