@extends('admin.layout.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Edit Berita</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="card">
            <form class="form-horizontal" action="{{ route('admin-berita-update', $editData->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Post <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" required name="tgl_post" id="tgl_post"
                                        value="{{ $editData->tgl_post }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Judul Berita <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <input type="text" required class="form-control" name="judul" id="judul"
                                        value="{{ $editData->judul }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi Berita <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <textarea required class="form-control" name="isi" id="default-editor" cols="30" rows="10">{{ $editData->isi }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Post By <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <input type="text" required class="form-control" name="post_by" id="post_by"
                                        value="{{ $editData->post_by }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Gambar Lama <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <img src="{{ asset('images/berita/'. $editData->gambar) }}" alt="Images" height="100px" width="120px">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gambar Baru <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="gambar_baru" id="gambar_baru">
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

    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
