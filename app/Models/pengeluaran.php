<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $primarykey = 'id_pengeluaran';
    protected $fillable = [
        "id_pengeluaran",
        "nama_pengeluaran",
        "tgl_pengeluaran",
        "total",
        "foto_struk",
    ];
    public $timestamps = false;
}
