<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program_Model extends Model
{
    use HasFactory;
    protected $table = "tb_armada";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_kategori', 'armada', 'isi', 'tgl', 'gambar'
    ];
    public $timestamps = false;
}
