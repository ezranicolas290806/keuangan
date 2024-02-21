<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $keyType = 'int';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function pengeluaran()
    {
        return $this->belongsTo(Pengeluaran::class);
    }
}