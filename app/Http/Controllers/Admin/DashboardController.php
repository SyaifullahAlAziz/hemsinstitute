<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin_Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Alert;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin/auth/login');
    }

    public function aksi_login_admin(Request $request)
    {
        // cek data login
        $user = new Admin_Model();
        $data_user = $user->CheckLoginAdmin($request->input("username_admin"), $request->input("password_admin"));
        if ($data_user) {

            // masukan data login ke session
            $request->session()->put('nama_admin', $data_user->nama_admin);
            $request->session()->put('username_admin', $data_user->username_admin);
            $request->session()->put('password_admin', $data_user->password_admin);
            $request->session()->put('id_admin', $data_user->id);

            return redirect()->route('admin_dashboard');
            // return redirect()->route('data-user')->with('pesan', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('view_login_admin');
        }
    }

    public function dashboard()
    {

        return view('admin/page/dashboard/index');
    }

    function aksi_logout_admin(Request $request)
    {
        $request->session()->forget('nama_admin');
        $request->session()->forget('username_admin');
        $request->session()->forget('password_admin');
        $request->session()->forget('id_admin');

        return redirect()->route('view_login_admin')->with("pesan", "Anda Sudah Logout");
    }
}
