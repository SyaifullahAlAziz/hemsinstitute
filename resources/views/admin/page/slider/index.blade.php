@extends('admin.layout.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Slider Company</h1>
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
            <div class="card-header">
                <a href="{{ route('slider_company.create') }}" class="btn btn-primary""><i class="fas fa-plus-square"></i>
                    Data Slider</a>
            </div>
            <div class="card-body">
                <table id="tabeltoko" class="display table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sub Judul Slider</th>
                            <th>Judul Slider</th>
                            <th>Image Slider</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $no => $slider)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $slider->sub_judul_slider }}</td>
                                <td>{{ $slider->judul_slider }}</td>
                                <td><img src='{{ asset("images/slider/$slider->img_slider") }}' alt="" height="100"
                                        width="100" /></td>
                                <td>
                                    <a href="{{ route('slider_company.edit', $slider->id) }}"
                                        class="btn btn-warning btn-sm btn-circle"><i class="far fa-edit"></i>
                                        Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm btn-block"
                                        onclick="mHapus('{{ route('slider_company.delete', $slider->id) }}')"><i
                                            class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
        function mHapus(url) {
            $('#ModalHapus').modal('show')
            $('#formDelete').attr('action', url);
        }
    </script>
@endsection
