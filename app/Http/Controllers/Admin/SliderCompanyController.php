<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Slider_Model;
use Illuminate\Support\Facades\Storage;

class SliderCompanyController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'img_slider' => 'mimes:jpeg,jpg,png|max:30000'
        );
    }
    public function index()
    {
        $sliders = Slider_Model::all();
        return view(
            'admin/page/slider/index',
            [
                'sliders' => $sliders
            ]
        );
    }

    public function create()
    {
        return view('admin.page.slider.add');
    }

    public function store(Request $r)
    {
        $validator = Validator::make($r->all(), $this->rules);
        if ($validator->fails()) {
            return redirect()
                ->route('slider_company.create')
                ->withErrors($validator)
                ->withInput();
        } else {

            $filename = $r->img_slider->getClientOriginalName();
            $r->file('img_slider')->move('images/slider/', $r->img_slider->getClientOriginalName());

            $slider = new Slider_Model;
            $slider->sub_judul_slider = $r->sub_judul_slider;
            $slider->judul_slider = $r->judul_slider;
            $slider->img_slider = $filename;
            $slider->save();

            return redirect()->route('slider_company');
        }
    }

    public function edit($id)
    {
        $data['slider'] = DB::table('tb_slider')->where('id', $id)->first();
        // dd($data['slider']);

        return view('admin.page.slider.form', $data);
    }


    public function update(request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'sub_judul_slider' => 'required',
            'judul_slider' => 'required',
            'img_slider' => 'mimes:jpeg,bmp,png,jpg',
        ]);


        // dd($validator);
        if ($validator->fails()) {
            return redirect()->route('slider_company.edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            $filename = $request->fotolama;
            if ($request->img_slider) {
                $filename = $request->file('img_slider')->getClientOriginalName();
                $request->img_slider->move(public_path('images/slider/'), $filename);
            }
        }

        $simpan = DB::table('tb_slider')->where('id', $id)->update([
            'sub_judul_slider' => $request->sub_judul_slider,
            'judul_slider' => $request->judul_slider,
            'img_slider' => $filename,
        ]);

        if ($simpan == TRUE) {
            return redirect()->route('slider_company');
        } else {
            return redirect()->route('slider_company.edit', $id);
        }
    }


    public function destroy($slider)
    {
        //hapus foto
        $cek = DB::table('tb_slider')->where('id', $slider)->first();
        File::delete('images/' . $cek->img_slider);

        //hapus data
        $del = DB::table('tb_slider')->where('id', $slider)->delete();
        echo '<script>
                    alert("Data Berhasil Dihapus")
                    window.location = "/admin/slider-company"
                  </script>';
    }
}
