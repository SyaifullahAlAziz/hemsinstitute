<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_Company_Model extends Model
{
    use HasFactory;
    protected $table = "tb_profile_company";
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_profile', 'isi_profile', 'img_profile', 'status_profile'
    ];
}
