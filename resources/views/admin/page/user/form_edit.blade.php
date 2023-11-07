@extends('admin.layout.app')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Edit Data Profile Company</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
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

                        <form action="{{ route($url, $client->id ?? null) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($client))
                            @method('put')
                            @endif

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nama Client <span style="color:red;">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control @error('nama_client') {{ 'is-invalid' }} @enderror" name="nama_client" value="{{ old('nama_client') ?? ($client->nama_client ?? '') }}">
                                                    @error('nama_client')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Lokasi Client <span style="color:red;">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control @error('lokasi_client') {{ 'is-invalid' }} @enderror" name="lokasi_client" value="{{ old('lokasi_client') ?? ($client->lokasi_client ?? '') }}">
                                                    @error('lokasi_client')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jenis Produk <span style="color:red;">*</span></label>
                                            <div class="input-group">
                                                <select name="jenis_produk" id="jenis_produk"
                                                    class="form-control @error('jenis_produk') {{ 'is-invalid' }} @enderror">
                                                    <option value="" selected disabled>-Pilih-</option>
                                                    <option {{ (old('jenis_produk') == 'ACP' ? 'selected':'') }} value="ACP">
                                                        ACP</option>
                                                    <option {{ (old('jenis_produk') == 'Akrilik' ? 'selected':'') }}
                                                        value="Akrilik">Akrilik</option>
                                                    <option {{ (old('jenis_produk') == 'Master Cem' ? 'selected':'') }}
                                                        value="MasterCem">Master Cem</option>
                                                    <option {{ (old('jenis_produk') == 'Membran' ? 'selected':'') }}
                                                        value="Membran">Membran</option>
                                                    <option {{ (old('jenis_produk') == 'Meubelair - Lavise' ? 'selected':'') }}
                                                        value="Meubelair">Meubelair - Lavise</option>
                                                    <option {{ (old('jenis_produk') == 'Avoda - Ultimate' ? 'selected':'') }}
                                                        value="Avoda">Avoda - Ultimate</option>
                                                    <option {{ (old('jenis_produk') == 'Interior Design' ? 'selected':'') }}
                                                        value="Interior">Interior Design</option>
                                                </select>
                                                @if(isset($client))
                                                <script>
                                                    document.getElementById('jenis_produk').value =
                                                        '<?php echo $client->jenis_produk ?>'
                                                </script>
                                                @endif
                                                @error('jenis_produk')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="form-label">Foto Client</label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control @error('img_client') {{ 'is-invalid' }} @enderror" name="img_client">
                                                    <i style="color:red">&nbsp;
                                                        File : <a style="color:black" href="{{asset('images/'.$client->img_client)}}">{{$client->img_client}}</a></i>
                                                        @error('img_client')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Client <span style="color:red;">*</span></label>
                                                <textarea name="deskripsi_client" id=""
                                                    class="@if(isset($client)) @if($client->deskripsi_client != "namainstansi")  @endif @endif @error('deskripsi_client') {{ 'is-invalid' }} @enderror" style="width: 100%">{{ old('deskripsi_client') ?? $client->deskripsi_client ?? '' }}</textarea>
                                                @error('deskripsi_client')
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

@push('js')
<script>
    $(document).ready(function() {
        $('#tabeltoko').DataTable();
    });
</script>
@endpush