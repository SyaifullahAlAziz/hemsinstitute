<?php

namespace App\Http\Controllers;

use App\Models\SosialMedia;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $data['slider'] = DB::table('tb_slider')
            ->get();

        $data['paket'] = DB::table('tb_kategori')
            ->get();

        $data['galeri'] = DB::table('tb_galeri')
            ->get();

        $data['berita'] = DB::table('tb_berita')
            ->get();

        return view('page.home', $data);
    }

    public function profil()
    {
        $data['profil'] = DB::table('tb_profile')->get();
        $data['pengurus'] = DB::table('tb_pengurus')->where('kategori', 'pengurus')->get();
        $data['trainer'] = DB::table('tb_pengurus')->where('kategori', 'trainer')->get();

        return view('page.profile', $data);
    }

    public function program()
    {
        $data['program'] = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->get();
        $data['kategori'] = DB::table('tb_kategori')->get();

        return view('page.program', $data);
    }

    public function kategori_program($nama)
    {
        $data['program'] = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('nama_kategori', $nama)
            ->get();

        $data['kategori'] = DB::table('tb_kategori')->get();

        return view('page.program-kategori', $data);
    }

    public function detail_program($slug)
    {
        $data['detail'] = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('slug', $slug)
            ->first();
        // ->simplePaginate(1);

        $data['kategori'] = DB::table('tb_kategori')
            ->get();

        return view('page.program-detail', $data);
    }

    public function wisata()
    {
        $data['wisata'] = DB::table('tb_armada')
            ->orderBy('id', 'desc')
            ->simplePaginate(5);

        $data['kategori'] = DB::table('tb_kategori')
            ->get();

        return view('page.wisata', $data);
    }

    public function kategori_wisata($nama)
    {
        $data['kategori'] = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('nama_kategori', $nama)
            ->get();

        $data['judul'] = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('nama_kategori', $nama)
            ->first();

        $data['category'] = DB::table('tb_kategori')
            ->get();


        return view('page.wisata_kategori', $data);
    }

    public function detail_wisata($slug)
    {
        $data['detail'] = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('slug', $slug)
            ->get();
        // ->simplePaginate(1);

        $data['judul'] = DB::table('tb_armada')
            ->join('tb_kategori', 'tb_armada.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('slug', $slug)
            ->first();
        // dd($data['judul']);

        $data['kategori'] = DB::table('tb_kategori')
            ->get();

        return view('page.wisata_detail', $data);
    }

    public function berita()
    {
        $data['berita'] = DB::table('tb_berita')
            ->get();

        $data['post'] = DB::table('tb_berita')
            ->limit('3')
            ->get();

        return view('page.berita', $data);
    }

    public function detail_berita($slug)
    {
        $data['detail'] = DB::table('tb_berita')
            ->where('slug', $slug)
            ->first();
        // dd($data['detail']);

        $data['post'] = DB::table('tb_berita')
            ->limit('3')
            ->get();

        return view('page.berita_detail', $data);
    }

    public function galeri()
    {
        $data['galeri'] = DB::table('tb_galeri')->get();

        return view('page.galeri', $data);
    }

    public function kontak()
    {
        $data['alamat'] = DB::table('tb_kontak')
            ->where('jenis_kontak', 'alamat')
            ->first();

        $data['whatsapp'] = DB::table('tb_kontak')
            ->where('jenis_kontak', 'whatsapp')
            ->first();

        $data['facebook'] = DB::table('tb_kontak')
            ->where('jenis_kontak', 'facebook')
            ->first();

        $data['instagram'] = DB::table('tb_kontak')
            ->where('jenis_kontak', 'instagram')
            ->first();

        $data['youtube'] = DB::table('tb_kontak')
            ->where('jenis_kontak', 'youtube')
            ->first();


        return view('page.kontak', $data);
    }
}
