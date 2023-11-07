<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kontak_Model;
use Illuminate\Support\Facades\DB;

class KontakCompanyController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'id_kontak'=>'numeric',
            'jenis_kontak'=>'required',
            'kontak' => 'required',
        );
    }
    public function index()
    {
        $kontak = DB::table('tb_kontak')->get();
        return view(
            'admin/page/kontak/index',
            [
                'kontak' => $kontak
            ]
        );
    }

    public function create()
    {
        return view(
            'admin/page/kontak/form',
            [
                'url' => 'simpan-kontak',
            ]
        );
    }

    public function store(Request $r){
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return redirect()
                ->route('simpan-kontak')
                ->withErrors($validator)
                ->withInput();
        }else{
            $kontak = new Kontak_Model;
            $kontak->jenis_kontak = $r->jenis_kontak;
            $kontak->kontak = $r->kontak;
            $kontak->save();

            echo '<script>
                        alert("Data Berhasil Disimpan")
                        window.location = "/admin/admin-kontak"
                  </script>';
        }
    }

    public function edit(Kontak_Model $kontak)
    {
        return view(
            'admin/page/kontak/form',
            [
                'kontak'     => $kontak,
                'url' => 'update-kontak',
            ]
        );
    }


    public function update(Request $r, Kontak_Model $kontak){
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return redirect()
            ->route('update-kontak', $kontak->id_kontak)
                ->withErrors($validator)
                ->withInput();
        }else{
            $kontak->jenis_kontak = $r->jenis_kontak;
            $kontak->kontak = $r->kontak;
            $kontak->save();

            echo '<script>
                    alert("Data Berhasil Diedit")
                    window.location = "/admin/admin-kontak"
                  </script>';
        }
    }

    public function destroy(Kontak_Model $kontak)
    {
        $kontak->delete();

        echo '<script>
                alert("Data Berhasil Dihapus")
                window.location = "/admin/admin-kontak"
              </script>';
    }
}
