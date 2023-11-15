<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $primarykey = 'id_layanan';
    protected $fillable = [
        "id_layanan",
        "nama_layanan",
        "harga",
    ];
    public $timestamps = false;
}
