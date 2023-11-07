<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PersyaratanProgram_Model;
use Illuminate\Support\Facades\DB;

class PersyaratanProgramController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'id'=>'numeric',
            'jenis'=>'required',
            'judul' => 'required',
            'persyaratan' => 'required',
        );
    }
    public function index()
    {
        $persyaratan = DB::table('tb_persyaratan')->get();
        return view(
            'admin/page/persyaratan/index',
            [
                'persyaratan' => $persyaratan
            ]
        );
    }

    public function create()
    {
        return view(
            'admin/page/persyaratan/form',
            [
                'url' => 'simpan-persyaratan-program',
            ]
        );
    }

    public function store(Request $r){

        $simpan = DB::table('tb_persyaratan')->insert([
            'jenis' => $r->jenis,
            'judul' => $r->judul,
            'persyaratan' => $r->persyaratan,
        ]);

        if($simpan == true){
            echo '<script>
                        alert("Data Berhasil Disimpan");
                        window.location ="admin-persyaratan-program";
                  </script>';
        } else {
            echo '<script>
                    alert("Data gagal Disimpan");
                    window.location = "admin-persyaratan-program";
                </script>';
        }

    }

    public function edit($id)
    {
        $data['editData'] = DB::table('tb_persyaratan')
                            ->where('id', $id)
                            ->first();
        return view('admin/page/persyaratan/form-edit',$data);
    }


    public function update(Request $r, $id){

        $update = DB::table('tb_persyaratan')
                  ->where('id', $id)
                  ->update([
                    'jenis' => $r->jenis,
                    'judul' => $r->judul,
                    'persyaratan' => $r->persyaratan,
        ]);

        if($update == true){
            echo '<script>
                    alert("Data Berhasil Diedit")
                    window.location = "/admin/admin-persyaratan-program"
                  </script>';
        } else {
            echo '<script>
                    alert("Data gagal Diedit")
                    window.location = "/admin/admin-persyaratan-program"
                  </script>';
        }
    }

    public function destroy(PersyaratanProgram_Model $id)
    {
        $id->delete();
        echo '<script>
                alert("Data Berhasil Dihapus")
                window.location = "/admin/admin-persyaratan-program"
              </script>';
    }
}
