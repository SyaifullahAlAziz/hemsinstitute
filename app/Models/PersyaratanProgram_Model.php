<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersyaratanProgram_Model extends Model
{
    use HasFactory;
    protected $table = "tb_persyaratan";
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenis', 'judul','persyaratan'
    ];
    public $timestamps = false;
}
