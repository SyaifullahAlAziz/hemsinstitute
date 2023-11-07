@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Data Client Company</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Client</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="card">
        <form class="form-horizontal" action="{{ route($url, $client->id ?? null) }}" method="POST"
            enctype="multipart/form-data">
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
                                <input type="text"
                                    class="form-control @error('nama_client') {{ 'is-invalid' }} @enderror"
                                    name="nama_client"
                                    value="{{ old('nama_client') ?? $client->nama_client ?? '' }}" @if(isset($profile))
                                        readonly
                                    @endif
                                    >
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
                                <input type="text"
                                    class="form-control @error('lokasi_client') {{ 'is-invalid' }} @enderror"
                                    name="lokasi_client"
                                    value="{{ old('lokasi_client') ?? $profile->lokasi_client ?? '' }}" @if(isset($profile))
                                        readonly
                                    @endif
                                    >
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
                                        '<?php echo $profile->jenis_produk ?>'
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
                                    <input name="img_client" type="file" class="form-control">
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
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button class="btn btn-secondary" type="button" onclick="window.history.back()">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


