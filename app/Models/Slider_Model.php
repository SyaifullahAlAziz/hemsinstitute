<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider_Model extends Model
{
    use HasFactory;
    protected $table = "tb_slider";
    protected $primaryKey = 'id';
    protected $fillable = [
        'sub_judul_slider', 'judul_slider','img_slider'
    ];
    public $timestamps = false;
}
