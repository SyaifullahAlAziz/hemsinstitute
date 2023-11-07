@extends('admin.layout.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Tambah Paket</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="card">
            <form class="form-horizontal" action="{{ route('simpan-armada') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kategori Paket <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <select name="id_kategori" id="" class="form-control">
                                        <option value="">Silahkan Pilih Kategori</option>
                                        @foreach ($kategori as $data)
                                            <option value="{{ $data->id_kategori }}">
                                                {{ $data->nama_kategori }}
                                            </option>                                 
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Paket <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <input type="text" required
                                        class="form-control @error('armada') {{ 'is-invalid' }} @enderror" name="armada"
                                        value="{{ old('armada') ?? ($armada->armada ?? '') }}"
                                        @if (isset($armada))  @endif>
                                    @error('armada')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi Paket <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <textarea name="isi" @error('isi') {{ 'is-invalid' }} @enderror id="default-editor" cols="30" rows="10" class="form-control"></textarea>
                                    @error('isi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <label>Detail Paket <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <textarea required class="form-control" name="detail" id="detail">
                                        {{ old('detail') ?? ($armada->detail ?? '') }}

                                </textarea>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gambar Paket <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" required
                                        class="form-control @error('gambar') {{ 'is-invalid' }} @enderror" name="gambar"
                                        value="{{ old('gambar') ?? ($armada->gambar ?? '') }}">
                                    @error('isi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button class="btn btn-secondary" type="button" onclick="window.history.back()">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
