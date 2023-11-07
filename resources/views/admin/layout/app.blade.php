<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.include.style')
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        @include('admin.include.navbar')



        @include('admin.include.sidebar')

        <div class="content-wrapper">

            @yield('content')

        </div>

        @include('admin.include.footer')

    </div>

    @include('admin.include.script')
    @stack('addon-script')

    @stack('js')

    @if (session()->has('pesan'))
        <script>
            Swal.fire({
                icon: 'pesan',
                title: '{{ session('pesan') }}',
            })

        </script>
    @endif

</body>
</html>
