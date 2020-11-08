<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('assets/js/waves.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Plugins js -->
<script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
<!-- Parsley js -->
<script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<script src="{{ asset('assets/plugins/parsleyjs/i18n/ms.js')}}"></script>

<!-- Sweet-Alert  -->
<script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>

@yield('script')

<!-- App js -->
<script src="{{ asset('assets/js/app.js')}}"></script>

<script>
$(document).ready(function () {
    $(".select2").select2();
});
</script>

@yield('script-bottom')