@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Data Profile Company</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="card">
        <form class="form-horizontal" action="{{ route('admin-profile-simpan') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Judul Profil <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="judul" id="judul" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Isi Profile <span style="color:red;">*</span></label>
                            <textarea name="isi" id="isi" height="60px" required class="form-control">

                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Foto Profile</label>
                            <div class="input-group">
                                <input name="foto" id="foto" type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button class="btn btn-secondary" type="button" onclick="window.history.back()">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#isi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection


