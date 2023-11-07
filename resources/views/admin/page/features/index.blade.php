@extends('admin.layout.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Features</h1>
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
                        <div class="card-header">
                            <a href="{{ route('tambah-features') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i>
                                Data Features</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="tabeltoko" class="display table table-striped">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karir as $no => $data)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{!! $data->judul !!}</td>
                                            <td>{!! $data->isi !!}</td>
                                            <td>
                                                <a href="{{ route('edit-features', $data->id) }}"
                                                    class="btn btn-warning btn-sm btn-circle"><i class="far fa-edit"></i>
                                                    Edit</a>
                                                <button type="button" class="btn btn-danger btn-sm btn-circle"
                                                    onclick="ModalHapus('{{ route('hapus-features', $data->id) }}')"><i
                                                        class="fas fa-trash"></i> Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
    <!-- /.content -->

    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" id="formDelete">
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        Yakin Hapus Data ?
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
        function ModalHapus(url) {
            $('#ModalHapus').modal('show')
            $('#formDelete').attr('action', url);
        }
    </script>
@endsection
