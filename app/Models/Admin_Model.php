<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin_Model extends Model
{
    use HasFactory;
    protected $table = "tb_admin";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_admin', 'username_admin', 'password_admin'
    ];


    public function CheckLoginAdmin($username, $password)
    {
        $data_user = $this->where("username_admin", $username)->get();
        // dd(count($data_user) == 1);
        if (count($data_user) == 1) {
            if (Hash::check($password, $data_user[0]->password_admin)) {
                unset($data_user[0]->password);
                // $data_user[0]->level = "Admin";
                return $data_user[0];
            }
        }
        return false;
    }
}
