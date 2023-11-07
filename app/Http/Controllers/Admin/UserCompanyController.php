<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserCompanyController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('tb_admin')->get();
        return view('admin/page/user/index',$data);
    }
}
