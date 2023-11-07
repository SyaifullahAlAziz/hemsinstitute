@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Tambah Galeri Video</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
    <div class="card">

        <form class="form-horizontal" action="{{ route('simpan-galeri-video') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Masukan Link Video <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text" name="link" id="link" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Foto Thumbnail <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="file" name="foto" id="foto" required class="form-control">
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


