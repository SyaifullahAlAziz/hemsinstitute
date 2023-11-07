@extends('admin.layout.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Edit Paket</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="card">
            <form class="form-horizontal" action="{{ route('update-wisata', $editData->id) }}" method="POST" enctype="multipart/form-data">
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
                                            <option value="{{ $data->id_kategori }}" {{ $data->id_kategori == $editData->id_kategori ? 'selected' : '' }}>
                                                {{ $data->nama_kategori }}
                                            </option>                                 
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Paket<span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <input type="text" required
                                        class="form-control @error('armada') {{ 'is-invalid' }} @enderror" name="armada"
                                        value="{{ $editData->armada }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi Paket <span style="color:red;">*</span></label>
                                <div class="input-group">
                                        <textarea name="isi" @error('isi') {{ 'is-invalid' }} @enderror id="default-editor" cols="30" rows="10" class="form-control">{{ $editData->isi }}</textarea>
                                    @error('isi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <label>Detail Wisata <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <textarea required class="form-control" name="detail" id="detail">
                                        {{ $editData->detail }}
                                    </textarea>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gambar Paket <span style="color:red;">*</span></label><br>
                                <img src="{{ asset('images/paket/'.$editData->gambar) }}" width="150px" alt="">
                                <div class="input-group">
                                    <input type="hidden" name="foto_lama" value="{{ $editData->gambar }}">
                                    <input type="file"
                                    class="form-control @error('gambar') {{ 'is-invalid' }} @enderror" name="gambar">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">Update</button>
                            <button class="btn btn-secondary" type="button" onclick="window.history.back()">Cancel</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

@endsection
