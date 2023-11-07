@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Tambah Kontak</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
    <div class="card">

        <form class="form-horizontal" action="{{ route($url, $kontak->id_kontak ?? null) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @if(isset($kontak))
            @method('put')
            @endif
            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Kontak <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text"
                                    class="form-control @error('jenis_kontak') {{ 'is-invalid' }} @enderror"
                                    name="jenis_kontak"
                                    value="{{ old('jenis_kontak') ?? $kontak->jenis_kontak ?? '' }}" @if(isset($kontak))

                                @endif
                                    >
                                @error('jenis_kontak')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kontak (628xxx) <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text"
                                    class="form-control @error('kontak') {{ 'is-invalid' }} @enderror"
                                    name="kontak"
                                    value="{{ old('kontak') ?? $kontak->kontak ?? '' }}"
                                    >
                                @error('kontak')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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


