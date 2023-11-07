@extends('admin.layout.app')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Edit Profile</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="{{ route('admin-profile-update', $editData->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Profil <span style="color:red;">*</span></label>
                                            <div class="input-group">
                                                <input type="text" value="{{ $editData->judul }}" class="form-control" name="judul" id="judul" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Isi Profile <span style="color:red;">*</span></label>
                                            <textarea name="isi" id="isi" height="60px" required class="form-control">
                                                {{ $editData->isi }}
                                            </textarea>
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

                    </div>
                    <!-- /.card-body -->
                </div>


                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->




@push('js')

<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#isi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush

@endsection

