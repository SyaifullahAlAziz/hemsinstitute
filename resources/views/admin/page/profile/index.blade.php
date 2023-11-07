@extends('admin.layout.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Profile</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="card">
            {{-- <div class="card-header">
                <a href="{{ route('admin-profile-tambah') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Data
                </a>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tabeltoko" class="display table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Foto</th>
                                <th style="text-align: center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile as $no => $data)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->isi }}</td>
                                    <td><img src='{{ asset("images/$data->foto") }}' alt="Images" height="100"
                                            width="100" /></td>
                                    <td style="text-align: center">
                                        <a href="{{ route('admin-profile-edit', $data->id) }}"
                                            class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        {{-- <button type="button" class="btn btn-danger btn-sm"
                                            onclick="mHapus('{{ route('admin-profile-hapus', $data->id) }}')"><i
                                                class="fa fa-trash"></i> Delete</button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" id="formDelete">
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        Yakin Hapus Data ini ?
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $(document).ready(function() {
                $('#tabeltoko').DataTable();
            });
        </script>
    @endpush

    <script>
        // untuk hapus data
        function mHapus(url) {
            $('#ModalHapus').modal('show')
            $('#formDelete').attr('action', url);
        }
    </script>
@endsection
