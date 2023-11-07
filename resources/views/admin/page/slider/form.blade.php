@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Data Slider</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Slider</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-fluid">
    <div class="card">

        <form class="form-horizontal" action="{{ route('slider_company.update', $slider->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sub Judul Slider <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text"
                                    class="form-control @error('sub_judul_slider') {{ 'is-invalid' }} @enderror"
                                    name="sub_judul_slider"
                                    value="{{ old('sub_judul_slider') ?? $slider->sub_judul_slider ?? '' }}"
                                    >
                                @error('sub_judul_slider')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Judul slider <span style="color:red;">*</span></label>
                            <div class="input-group">
                                <input type="text"
                                    class="form-control @error('judul_slider') {{ 'is-invalid' }} @enderror"
                                    name="judul_slider"
                                    value="{{ old('judul_slider') ?? $slider->judul_slider ?? '' }}"
                                    >
                                @error('judul_slider')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label">Foto Slider</label>
                                <div class="input-group">
                                    <input name="img_slider" type="file" class="form-control">
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
@endsection


