<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    use HasFactory;
    protected $table = 'pemilik';
    protected $primarykey = 'id_pemilik';
    protected $fillable = [
        "id_pemilik",
        "nama",
        "no_telepon",
        "alamat",
    ];
    public $timestamps = false;


}
 