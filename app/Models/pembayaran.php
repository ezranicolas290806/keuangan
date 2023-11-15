<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primarykey = 'id_pembayaran';
    protected $fillable = [
        "id_pembayaran",
        "jumlah_pembayaran",
        "tgl_pembayaran",
    ];
    public $timestamps = false;
}
