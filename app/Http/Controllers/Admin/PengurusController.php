<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class PengurusController extends Controller
{
    public function index()
    {
        $data['pengurus'] = DB::table('tb_pengurus')->get();
        return view('admin.page.pengurus.index', $data);
    }

    public function create()
    {
        return view('admin.page.pengurus.form');
    }

    public function store(Request $r)
    {
        $foto = $r->file('foto');

        if ($foto == '') {
            $simpan = DB::table('tb_pengurus')->insert([
                'nama' => $r->nama,
                'kategori' => $r->kategori,
                'jabatan' => $r->jabatan,
            ]);
        } else {
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('images/pengurus/', $r->foto->getClientOriginalName());
            $simpan = DB::table('tb_pengurus')->insert([
                'nama' => $r->nama,
                'kategori' => $r->kategori,
                'jabatan' => $r->jabatan,
                'foto' => $filename,
            ]);
        }

        if ($simpan == true) {
            echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location='/admin/admin-pengurus'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location='/admin/admin-pengurus'
                  </script>";
        }
    }

    public function edit($id)
    {
        $data['editData'] = DB::table('tb_pengurus')->where('id', $id)->first();
        return view('admin.page.pengurus.form_edit', $data);
    }

    public function update(Request $r, $id)
    {
        $fotoBaru = $r->file('foto_baru');

        if ($fotoBaru == '') {

            $update = DB::table('tb_pengurus')->where('id', $id)->update([
                'nama' => $r->nama,
                'kategori' => $r->kategori,
                'jabatan' => $r->jabatan,
            ]);
        } else {

            $filename = $r->foto_baru->getClientOriginalName();
            $r->file('foto_baru')->move('images/pengurus/', $r->foto_baru->getClientOriginalName());
            $update = DB::table('tb_pengurus')->where('id', $id)->update([
                'nama' => $r->nama,
                'kategori' => $r->kategori,
                'jabatan' => $r->jabatan,
                'foto' => $filename,
            ]);
        }

        if ($update == true) {
            echo "<script>
                    alert('Data Berhasil Diupdate');
                    window.location='/admin/admin-pengurus'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location='/admin/admin-pengurus'
                  </script>";
        }
    }

    public function destroy($id)
    {
        //hapus foto
        $cek = DB::table('tb_pengurus')->where('id', $id)->first();
        File::delete('images/' . $cek->foto);

        $hapus = DB::table('tb_pengurus')->where('id', $id)->delete();
        if ($hapus == true) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/admin/admin-pengurus'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/admin/admin-pengurus'
                  </script>";
        }
    }
}
