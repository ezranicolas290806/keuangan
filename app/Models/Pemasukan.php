<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $table = 'pemasukan';
    protected $primaryKey = 'id_pemasukan';
    protected $keyType = 'int';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function pemasukan()
    {
        return $this->belongsTo(Pemasukan::class);
    }
}
