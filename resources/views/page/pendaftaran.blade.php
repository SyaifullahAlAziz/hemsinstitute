@extends('layout.index')
@section('content')
    <section class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Form Pendaftaran Online</h1>
                    <p class="breadcrumbs"><span class="mr-2">Home <i class="ion-ios-arrow-forward"></i></span>
                        <span>Pendaftaran Online <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row block-9 justify-content-center ">
                <div class="col-md-8 mb-md-6">
                    <h2 class="text-center" style="color: dodgerblue">Isi Form Pendaftaran Berikut !</h2>
                    <form action="{{ route('simpan-pendaftaran') }}" class="bg-light p-5 contact-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" required class="form-control" name="nama" id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <input placeholder="Tanggal Lahir" required class="textbox-n form-control" type="text"
                                onfocus="(this.type='date')" id="tgl_lahir" name="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required id="email" class="form-control"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nohp" required id="nohp" class="form-control"
                                placeholder="Nomor Handphone / wa">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat" required id="alamat" class="form-control"
                                placeholder="Alamat Lengkap">
                        </div>
                        <div class="form-group">
                            <select name="pendidikan" id="pendidikan" class="form-control" required>
                                <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="D3/S1">D3/S1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="armada" required id="armada" class="form-control">
                                <option value="" selected disabled>Pilih Armada</option>
                                @foreach ($armada as $item)
                                    <option value="{{ $item->armada }}">{{ $item->armada }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Daftar" class=" btn sm btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
