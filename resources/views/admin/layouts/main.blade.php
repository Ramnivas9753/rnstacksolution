
<!DOCTYPE html>
<html lang="en">
    
<head>

    <head>
        <!-- Mobile Specific Meta Tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Title -->
        <title>@yield('page_title') || RnStack Solution</title>
    
        <!-- Favicon -->
        <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/png" sizes="16x16">
    
        <!-- SEO Meta Tags -->
        <meta name="description" content="RnStack Solution: Learn how to grow organic vegetables on your terrace with minimal investment. Sustainable home gardening tips and techniques.">
        <meta name="keywords" content="terrace garden, organic vegetables, home gardening, RnStack Solution, minimal investment, sustainable gardening">
        <meta name="author" content="RnStack Solution">
        <meta name="robots" content="index, follow">
    
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="RnStack Solution - Grow Organic Vegetables">
        <meta property="og:description" content="Learn how to grow organic vegetables on your terrace with minimal investment.">
        <meta property="og:image" content="{{ asset('images/village-terrace-garden-social.png') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
    
        <!-- Essential Stylesheets -->
        <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    
        <!-- Additional Styles (Optional if needed) -->
        <link href="{{ asset('admin-assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/vendor/pickadate/themes/default.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/vendor/pickadate/themes/default.date.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    
        <!-- Google Fonts (Optimized) -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;900&family=Roboto:wght@100;900&display=swap" rel="stylesheet">
    </head>
    


<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('admin.dashboard')}}" class="brand-logo">
                <img loading="lazy" class="logo-abbr" src="{{ url('storage/app/'.business_setting('header_logo'))}}" alt="{{business_setting('site_name')}}">
                <img loading="lazy" class="logo-compact" src="{{ asset('admin-assets') }}/images/logo-text.png" alt="{{business_setting('site_name')}}">
                {{-- <img loading="lazy" class="brand-title" src="{{ asset('admin-assets') }}/images/logo-text.png" alt=""> --}}
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <h1 class="d-none d-md-block">{{business_setting('site_name')}}</h1>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button"
                                    data-bs-toggle="dropdown">
                                    <img loading="lazy" src="{{ url('storage/app/'.business_setting('fav_icon'))}}" alt="{{business_setting('site_name')}}" width="20">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{route('admin.admin')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="{{route('admin.logout')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


        @include('admin.layouts.sidebar')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('body')

        </div>
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>{{ business_setting('copyright') }} <a href="{{ business_setting('youtube') }}" target="_blank">RnStack Solution</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>

    <!-- Required vendors -->
    <!-- Required vendors -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="{{ asset('admin-assets') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/chart-js/chart.bundle.min.js"></script>
    <script src="{{ asset('admin-assets') }}/js/custom.min.js"></script>
    <script src="{{ asset('admin-assets') }}/js/deznav-init.js"></script>
    <!-- Select -->
    <script src="{{ asset('admin-assets') }}/vendor/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('admin-assets') }}/js/plugins-init/select2-init.js"></script>
    <!-- pickdate -->
    <script src="{{ asset('admin-assets') }}/vendor/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/pickadate/picker.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/pickadate/picker.time.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/pickadate/picker.date.js"></script>
    <script src="{{ asset('admin-assets') }}/js/plugins-init/pickadate-init.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- Daterangepicker -->
    <script src="{{ asset('admin-assets') }}/js/plugins-init/bs-daterange-picker-init.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('admin-assets') }}/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Chart piety plugin files -->
    <script src="{{ asset('admin-assets') }}/vendor/peity/jquery.peity.min.js"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('admin-assets') }}/vendor/apexchart/apexchart.js"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('admin-assets') }}/js/dashboard/dashboard-1.js"></script>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker({
                inline: true,
            });
        });
    </script>
    <!-- Jquery Validation -->
    <script src="{{ asset('admin-assets') }}/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="{{ asset('admin-assets') }}/js/plugins-init/jquery.validate-init.js"></script>
	<script>
        (function () {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
	</script>

    <!-- Data Table CDN -->
    <link rel="stylesheet" href="{{ asset('admin-assets') }}/css/data_table_css/jquery.dataTables.css">
    <script src="{{ asset('admin-assets') }}/js/data_table_js/jquery.dataTables.js"></script>
    <!-- Datatable Responsive -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <!-- Datatable Excel and csv and pdf and copy button cdn -->
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    
    <!-- toaster -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>
    <script>
        @if (Session::has('message'))
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        @if ($errors->any())Satya
            @foreach ($errors->all() as $error)
                toastr.error('<?= $error ?>');
            @endforeach
        @endif
    </script>

    <!-- Status Change -->
    <script>
        function changeStatus(table, column, row_id) {
            if (column == 'feature') {
                id = "#tab2_" + row_id;
            } else if (column == 'excellence') {
                id = "#tab1_" + row_id;
            } else {
                id = "#tab_" + row_id;
            }
            status = $(id).data('status');

            if (status == 1) {
                status = 0;
            } else {
                status = 1;
            }
            $.ajax({
                url: "{{ route('admin.change.status') }}",
                type: "POST",
                data: {
                    table: table,
                    column: column,
                    row_id: row_id,
                    status: status,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    if (data) {
                        $(id).data('status', status)
                        toastr.success("Status Changed")
                    }
                }
            });
        }
    </script>


    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <script>
        function deleteRecord(table, row_id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, You won't be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "delete_row_id",
                        type: "DELETE",
                        data: {
                            table: table,
                            row_id: row_id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data) {
                                swal({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success",
                                })
                                .then((result) => {
                                    location.reload();
                                });
                            }
                        }
                    });
                } else {
                    swal({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        icon: "error",
                    })
                }
            });
        }
    </script>


    <!-- Ckeditor Js -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js" ></script>
    <script>
        ClassicEditor.create(document.querySelector('#editor1'))
        ClassicEditor.create(document.querySelector('#editor2'))
        ClassicEditor.create(document.querySelector('#editor3'))
        ClassicEditor.create(document.querySelector('#editor4'))
        ClassicEditor.create(document.querySelector('#editor5'))
        ClassicEditor.create(document.querySelector('#editor6'))
        ClassicEditor.create(document.querySelector('#editor7'))
        ClassicEditor.create(document.querySelector('#editor8'))
        .catch(error => {
            console.error(error);
        });
    </script>

    @yield('script')
</body>
</html>
