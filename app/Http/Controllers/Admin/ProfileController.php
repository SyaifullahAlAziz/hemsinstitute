<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Program_Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $data['profile'] = DB::table('tb_profile')->get();
        return view('admin.page.profile.index', $data);
    }

    public function create()
    {
        return view('admin.page.profile.form');
    }

    public function store(Request $r)
    {
        $foto = $r->file('foto');


        if ($foto == '') {
            $simpan = DB::table('tb_profile')->insert([
                'judul' => $r->judul,
                'isi' => $r->isi,
            ]);
        } else {
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('images', $r->foto->getClientOriginalName());
            $simpan = DB::table('tb_profile')->insert([
                'judul' => $r->judul,
                'isi' => $r->isi,
                'foto' => $filename,
            ]);
        }

        if ($simpan == true) {
            echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location='/admin/admin-profile'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location='/admin/admin-profile'
                  </script>";
        }
    }

    public function edit($id)
    {
        $data['editData'] = DB::table('tb_profile')->where('id', $id)->first();
        return view('admin.page.profile.form_edit', $data);
    }

    public function update(Request $r, $id)
    {
        $validator = Validator::make($r->all(), [
            'judul' => 'required',
            'isi' => 'required',
        ]);
        // dd($validator);

        if ($validator) {
            $update = DB::table('tb_profile')->where('id', $id)->update([
                'judul' => $r->judul,
                'isi' => $r->isi,
            ]);
        }
        // dd($update);

        if ($update == true) {
            echo "<script>
                    alert('Data Berhasil Diupdate');
                    window.location='/admin/admin-profile'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location='/admin/admin-profile'
                  </script>";
        }
    }

    public function destroy($id)
    {
        //hapus foto
        $cek = DB::table('tb_profile')->where('id', $id)->first();
        File::delete('images/' . $cek->foto);

        $hapus = DB::table('tb_profile')->where('id', $id)->delete();
        if ($hapus == true) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/admin/admin-profile'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/admin/admin-profile'
                  </script>";
        }
    }
}
