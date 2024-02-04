<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link rel="shortcut icon" href="../../images/favicon.png">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlitee5ca.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/themee5ca.css?ver=3.2.3') }}">
    <link href="{{ asset('fontawesome5/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('dropify/dropify.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }
    </style>


</head>

<body class="nk-body ui-rounder has-sidebar ui-light ">

    <div class="nk-app-root">
        <div class="nk-main ">
            @include('admin.layouts.sidebar')
            <div class="nk-wrap ">
                <div class="nk-header is-light nk-header-fixed">
                    <div class="container-xl wide-xl">
                        @include('admin.layouts.header')
                    </div>
                </div>
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">

                            @if (session('success'))
                                <script type="text/javascript">
                                    setTimeout(() => {
                                        Swal.fire({
                                            title: "Success!",
                                            text: "{{ Session::get('success') }}",
                                            icon: "success"
                                        });
                                    }, 1000)
                                </script>
                            @endif
                            @if (session('error'))
                                <script type="text/javascript">
                                    setTimeout(() => {
                                        Swal.fire({
                                            icon: "error",
                                            title: "Oops...",
                                            text: "{{ Session::get('error') }}",
                                        });
                                    }, 1000);
                                </script>
                            @endif
                            <!-- Page Content -->
                            <main>
                                {{ $slot }}
                            </main>


                        </div>
                    </div>
                </div>

                <div class="nk-footer">
                    <div class="container-xl wide-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2023
                                DashLite. Template by <a href="https://softnio.com/" target="_blank">Softnio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('admin/assets/js/bundlee5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/scriptse5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/demo-settingse5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/libs/datatable-btnse5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/charts/gd-campaigne5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('sweetalert.js') }}"></script>
    <script src="{{ asset('dropify/dropify.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.dropify').dropify();
        });
    </script>
    <script>
        function deleteData(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
</body>

</html>
