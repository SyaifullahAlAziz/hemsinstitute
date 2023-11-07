<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PersyaratanProgram_Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class GaleriController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'id' => 'numeric',
            'foto' => 'required',
        );
    }
    public function index()
    {
        $galeri = DB::table('tb_galeri')->get();
        return view(
            'admin/page/galeri/index',
            [
                'galeri' => $galeri
            ]
        );
    }

    public function create()
    {
        return view(
            'admin/page/galeri/form',
            [
                'url' => 'simpan-galeri',
            ]
        );
    }

    public function store(Request $r)
    {
        $filename = $r->foto->getClientOriginalName();
        $r->file('foto')->move('images/galeri/', $r->foto->getClientOriginalName());

        $simpan = DB::table('tb_galeri')->insert([
            'foto' => $filename,
        ]);

        if ($simpan == true) {
            echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location='/admin/admin-galeri'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location='/admin/admin-galeri'
                  </script>";
        }
    }

    public function destroy($id)
    {
        //hapus foto
        $cek = DB::table('tb_galeri')->where('id', $id)->first();
        File::delete('images/galeri/' . $cek->foto);

        $hapus = DB::table('tb_galeri')->where('id', $id)->delete();
        if ($hapus == true) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/admin/admin-galeri'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/admin/admin-galeri'
                  </script>";
        }
    }
}
