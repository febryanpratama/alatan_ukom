<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 16:57:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Dreams LMS</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/img/favicon.svg" />

    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/css/feather.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/select2/css/select2.min.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick-theme.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/feather/feather.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/dropzone/dropzone.min.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/aos/aos.css" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
     {{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.min.css" integrity="sha512-NvuRGlPf6cHpxQqBGnPe7fPoACpyrjhlSNeXVUY7BZAj1nNhuNpRBq3osC4yr2vswUEuHq2HtCsY2vfLNCndYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
     {{-- <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script> --}}

    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css" />
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    {{-- <script src="{{ asset('') }}assets/js/ckeditor.js"></script> --}}

    {{-- <script src="{{ asset('') }}assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script> --}}

    <script src="{{ asset('') }}assets/plugins/countup/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/countup/jquery.counterup.min.js"></script>

    <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/slick/slick.js"></script>

    <script src="{{ asset('') }}assets/plugins/feather/feather.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="{{ asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <script src="{{ asset('') }}assets/js/circle-progress.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/dropzone/dropzone.min.js"></script>

    {{-- Package --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.min.js" integrity="sha512-IYzd4A07K9kxY3b8YIXi8L0BmUPVvPlI+YpLOzKrIKA3sQ4gt43dYp+y6ip7C7LRLXYfMHikpxeprZh7dYQn+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- End Package --}}
    <script src="{{ asset('') }}assets/js/validation.js"></script>

    <script src="{{ asset('') }}assets/plugins/aos/aos.js"></script>

    <script src="{{ asset('') }}assets/js/script.js"></script>

    @yield('custom-scripts')

    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Upload',
                'replace': 'Ganti',
                'remove':  'Hapus',
                'error':   'error'
            }
        });
    </script>
</body>

<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 16:58:58 GMT -->

</html>