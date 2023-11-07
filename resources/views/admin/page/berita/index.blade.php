@extends('admin.layout.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Berita</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin-berita-tambah') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Data
                    Berita</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tabeltoko" class="display table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Post By</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $no => $data)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $data->tgl_post }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{!! substr($data->isi, 0, 200) !!}</td>
                                    <td>{{ $data->post_by }}</td>
                                    <td><img src='{{ asset("images/berita/$data->gambar") }}' alt="" height="60px"
                                            width="60px" /></td>
                                    <td>
                                        <a href="{{ route('admin-berita-edit', $data->id) }}"
                                            class="btn btn-warning btn-sm btn-block"><i class="fa fa-edit"></i> Edit</a>
                                        <button type="button" class="btn btn-danger btn-sm btn-block"
                                            onclick="mHapus('{{ route('admin-berita-hapus', $data->id) }}')"><i
                                                class="fa fa-trash"></i> Delete</button>
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
