<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Program_Model;
use Illuminate\Support\Facades\DB;

class ArmadaController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'id' => 'numeric',
            'armada' => 'required',
            'isi' => 'required',
            'detail' => 'required',

        );
    }
    public function index()
    {
        $armada = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->orderBy('id', 'desc')
            ->get();

        return view(
            'admin/page/armada/index',
            [
                'armada' => $armada
            ]
        );
    }

    public function create()
    {
        $data['kategori'] = DB::table('tb_kategori')->get();

        return view(
            'admin/page/armada/form',
            $data,
            [
                'url' => 'simpan-armada',
            ]
        );
    }

    public function store(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id_kategori' => 'required',
            'armada' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('simpan-armada')
                ->withErrors($validator)
                ->withInput();
        } else {
            $filename = $r->gambar->getClientOriginalName();
            $r->file('gambar')->move('images/paket/', $r->gambar->getClientOriginalName());

            $simpan = DB::table('tb_armada')->insert([
                'id_kategori' => $r->id_kategori,
                'armada' => $r->armada,
                'slug' => str_replace('+', '-', urlencode($r->armada)),
                'isi' => $r->isi,
                'tgl' => date('Y-m-d'),
                'gambar' => $filename,
            ]);

            echo '<script>
                        alert("Data Berhasil Disimpan")
                        window.location = "/admin/admin-armada"
                  </script>';
        }
    }

    public function edit($id)
    {
        $data['editData'] = DB::table('tb_armada')->where('id', $id)->first();
        $data['kategori'] = DB::table('tb_kategori')->get();

        return view('admin/page/armada/form_edit', $data);
    }


    public function update(Request $r, $id)
    {
        $validator = Validator::make($r->all(), [
            'id_kategori' => 'required',
            'armada' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('update-wisata', $id)
                ->withErrors($validator)
                ->withInput();
        } else {
            $filename = $r->foto_lama;
            if ($r->gambar) {
                $filename = $r->file('gambar')->getClientOriginalName();
                $r->gambar->move(public_path('images/paket/'), $filename);
            }

            $simpan = DB::table('tb_armada')->where('id', $id)->update([
                'id_kategori' => $r->id_kategori,
                'armada' => $r->armada,
                'slug' => str_replace('+', '-', urlencode($r->armada)),
                'isi' => $r->isi,
                'tgl' => date('Y-m-d'),
                'gambar' => $filename,
            ]);

            echo '<script>
                    alert("Data Berhasil Diedit")
                    window.location = "/admin/admin-armada"
                  </script>';
        }
    }

    public function destroy(Program_Model $armada)
    {
        $armada->delete();

        echo '<script>
                alert("Data Berhasil Dihapus")
                window.location = "/admin/admin-armada"
              </script>';
    }
}
