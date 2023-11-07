@extends('admin.layout.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Edit Pengurus</h1>
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

                            <form action="{{ route('admin-pengurus-update', $editData->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pengurus <span style="color:red;">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" value="{{ $editData->nama }}" class="form-control"
                                                        name="nama" id="nama" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Jabatan <span style="color:red;">*</span></label>
                                                <div class="input-group">
                                                   <select name="kategori" id="" class="form-control" required>
                                                        <option value="">Pilih Jenis Jabatan</option>
                                                        <option value="pengurus" {{ $editData->kategori == 'pengurus' ? 'selected' : '' }}>Pengurus</option>
                                                        <option value="trainer" {{ $editData->kategori == 'trainer' ? 'selected' : '' }}>Trainer</option>
                                                   </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jabatan Pengurus <span style="color:red;">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" value="{{ $editData->jabatan }}"
                                                        class="form-control" name="jabatan" id="jabatan" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Foto Lama <span style="color:red;">*</span></label>
                                            <div class="input-group">
                                                <img src="{{ asset('images/pengurus/' . $editData->foto) }}" alt="Images"
                                                    height="100px" width="120px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto Baru <span style="color:red;">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="foto_baru" id="foto_baru">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <button class="btn btn-secondary" type="button"
                                            onclick="window.history.back()">Cancel</button>
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
@endsection
