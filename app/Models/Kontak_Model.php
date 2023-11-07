<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak_Model extends Model
{
    use HasFactory;
    protected $table = "tb_kontak";
    protected $primaryKey = 'id_kontak';
    protected $fillable = [
        'jenis_kontak', 'kontak'
    ];
    public $timestamps = false;
}
