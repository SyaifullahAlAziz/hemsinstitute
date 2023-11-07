<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir_Model extends Model
{
    use HasFactory;
    protected $table = "tb_features";
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul', 'isi'
    ];
    public $timestamps = false;
}
