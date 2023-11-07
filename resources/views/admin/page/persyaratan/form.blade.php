@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Tambah Persyaratan Program Kerja</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
    <div class="card">

        <form class="form-horizontal" action="{{ route('simpan-persyaratan-program') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Persyaratan <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <select name="jenis" id="jenis" required class="form-control">
                                    <option value="">Pilih Jenis Persyaratan</option>
                                    <option value="Persyaratan Umum">Persyaratan Umum</option>
                                    <option value="Dokumen Pendaftaran">Dokumen Pendaftaran</option>
                                    <option value="Biaya">Biaya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Persyaratan <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text" name="judul" id="judul" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Detail Persyaratan <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <textarea name="persyaratan" id="persyaratan" height="60px" required class="form-control">
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

<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#persyaratan' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection


