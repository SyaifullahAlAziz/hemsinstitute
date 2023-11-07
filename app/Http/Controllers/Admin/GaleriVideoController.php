<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PersyaratanProgram_Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class GaleriVideoController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'id'=>'numeric',
            'foto'=>'required',
            'link'=>'required',
        );
    }
    public function index()
    {
        $video = DB::table('tb_video')->get();
        return view(
            'admin/page/galeri-video/index',
            [
                'video' => $video
            ]
        );
    }

    public function create()
    {
        return view(
            'admin/page/galeri-video/form',
            [
                'url' => 'simpan-galeri-video',
            ]
        );
    }

    public function store(Request $r)
    {
        $filename = $r->foto->getClientOriginalName();
        $r->file('foto')->move('images',$r->foto->getClientOriginalName());

        $simpan = DB::table('tb_video')->insert([
                'foto' => $filename,
                'link' => $r->link,
        ]);

        if($simpan == true){
            echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location='/admin/admin-galeri-video'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location='/admin/admin-galeri-video'
                  </script>";
        }
    }

    public function edit ($id)
    {
        $data['editData'] = DB::table('tb_video')->where('id', $id)->first();
        return view ('admin.page.galeri-video.form-edit', $data);
    }

    public function update(Request $r, $id)
    {
        $fotoBaru = $r->file('fotobaru');

        if($fotoBaru == ''){

            $update = DB::table('tb_video')->where('id', $id)->update([
                'link' => $r->link,
            ]);
        } else {

            $filename = $r->fotobaru->getClientOriginalName();
            $r->file('fotobaru')->move('images',$r->fotobaru->getClientOriginalName());
            $update = DB::table('tb_video')->where('id', $id)->update([
                'link' => $r->link,
                'foto' => $filename,
            ]);
        }

        if($update == true){
            echo "<script>
                    alert('Data Berhasil Diupdate');
                    window.location='/admin/admin-galeri-video'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location='/admin/admin-galeri-video'
                  </script>";
        }

    }

    public function destroy($id)
    {
         //hapus foto
        $cek = DB::table('tb_video')->where('id',$id)->first();
        File::delete('images/'.$cek->foto);

        $hapus = DB::table('tb_video')->where('id', $id)->delete();
        if($hapus == true){
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/admin/admin-galeri-video'
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/admin/admin-galeri-video'
                  </script>";
        }

    }

}
