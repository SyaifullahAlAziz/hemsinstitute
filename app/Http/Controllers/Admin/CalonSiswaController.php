<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kontak_Model;
use Illuminate\Support\Facades\DB;

class CalonSiswaController extends Controller
{
    public function index()
    {
        $data['calonSiswa'] = DB::table('tb_pendaftaran')->get();
        return view('admin.page.calon-siswa.index', $data);
    }

    public function detail($id)
    {
        $data['calonSiswa'] = DB::table('tb_pendaftaran')
                              ->where('id', $id)
                              ->first();
        return view('admin.page.calon-siswa.detail', $data);
    }
    
    public function destroy($id)
    {
        $hapus = DB::table('tb_pendaftaran')->where('id', $id)->delete();
        if ($hapus == true) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/admin/calon-siswa'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/admin/calon-siswa'
                  </script>";
        }
    }
}
