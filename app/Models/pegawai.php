<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primarykey = 'id_pegawai';
    protected $fillable = [
        "id_pegawai",
        "nama",
        "no_telepon",
        "alamat",
    ];
    public $timestamps = false;

}
