<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index()
    {
        $data['berita'] = DB::table('tb_berita')->get();
        return view('admin.page.berita.index', $data);
    }

    public function create()
    {
        return view('admin.page.berita.form');
    }

    public function store(Request $r)
    {
        $gambar = $r->file('gambar');

        if ($gambar == '') {
            $simpan = DB::table('tb_berita')->insert([
                'tgl_post' => $r->tgl_post,
                'judul' => $r->judul,
                'slug' => str_replace('+', '-', urlencode($r->judul)),
                'isi' => $r->isi,
                'post_by' => $r->post_by,
            ]);
        } else {

            $filename = $r->gambar->getClientOriginalName();
            $r->file('gambar')->move('images/berita/', $r->gambar->getClientOriginalName());

            $simpan = DB::table('tb_berita')->insert([
                'tgl_post' => $r->tgl_post,
                'judul' => $r->judul,
                'slug' => str_replace('+', '-', urlencode($r->judul)),
                'isi' => $r->isi,
                'post_by' => $r->post_by,
                'gambar' => $filename,
            ]);
        }

        if ($simpan == true) {
            echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location='/admin/admin-berita'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location='/admin/admin-berita'
                  </script>";
        }
    }

    public function edit($id)
    {
        $data['editData'] = DB::table('tb_berita')->where('id', $id)->first();
        return view('admin.page.berita.form_edit', $data);
    }

    public function update(Request $r, $id)
    {
        $gambarBaru = $r->file('gambar_baru');

        if ($gambarBaru == '') {

            $update = DB::table('tb_berita')->where('id', $id)->update([
                'tgl_post' => $r->tgl_post,
                'judul' => $r->judul,
                'slug' => str_replace('+', '-', urlencode($r->judul)),
                'isi' => $r->isi,
                'post_by' => $r->post_by,
            ]);
        } else {

            $filename = $r->gambar_baru->getClientOriginalName();
            $r->file('gambar_baru')->move('images/berita/', $r->gambar_baru->getClientOriginalName());
            $update = DB::table('tb_berita')->where('id', $id)->update([
                'tgl_post' => $r->tgl_post,
                'judul' => $r->judul,
                'slug' => str_replace('+', '-', urlencode($r->judul)),
                'isi' => $r->isi,
                'post_by' => $r->post_by,
                'gambar' => $filename,
            ]);
        }

        if ($update == true) {
            echo "<script>
                    alert('Data Berhasil Diupdate');
                    window.location='/admin/admin-berita'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location='/admin/admin-berita'
                  </script>";
        }
    }

    public function destroy($id)
    {
        //hapus foto
        $cek = DB::table('tb_berita')->where('id', $id)->first();
        File::delete('images/berita/' . $cek->gambar);

        $hapus = DB::table('tb_berita')->where('id', $id)->delete();
        if ($hapus == true) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/admin/admin-berita'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/admin/admin-berita'
                  </script>";
        }
    }
}
