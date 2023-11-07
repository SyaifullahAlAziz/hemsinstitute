@extends('admin.layout.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Calon Siswa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <table class="display table table-striped">
                                <tr>
                                    <td width="25%">Nama Lengkap </td>
                                    <td width="3%">:</td>
                                    <td>{{ $calonSiswa->nama }}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Tanggal Lahir </td>
                                    <td width="3%">:</td>
                                    <td>{{ date('d-m-Y', strtotime($calonSiswa->tgl_lahir)) }}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Email </td>
                                    <td width="3%">:</td>
                                    <td>{{ $calonSiswa->email }}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Nohp / Wa </td>
                                    <td width="3%">:</td>
                                    <td>{{ $calonSiswa->nohp }}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Alamat Lengkap </td>
                                    <td width="3%">:</td>
                                    <td>{{ $calonSiswa->alamat }}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Pendidikan Terakhir </td>
                                    <td width="3%">:</td>
                                    <td>{{ $calonSiswa->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Program Latihan Yang Dipilih </td>
                                    <td width="3%">:</td>
                                    <td>{{ $calonSiswa->program }}</td>
                                </tr>


                            </table>
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
@endsection
