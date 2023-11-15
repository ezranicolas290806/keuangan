<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;
    protected $table = 'kasir';
    protected $primarykey = 'id_kasir';
    protected $fillable = [
        "id_kasir",
        "nama",
        "no_telepon",
        "alamat",
    ];
    public $timestamps = false;

}
