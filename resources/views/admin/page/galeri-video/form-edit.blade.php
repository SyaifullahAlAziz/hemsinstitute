@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Edit Galeri Video</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
    <div class="card">

        <form class="form-horizontal" action="{{ route('update-galeri-video', $editData->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Link Video <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text" name="link" id="link" value="{{ $editData->link }}" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Foto Lama <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <img src="{{ asset('images/'. $editData->foto) }}" alt="Images" width="60px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Foto Baru <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="file" name="fotobaru" id="fotobaru" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Update</button>
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


