<script src="{{ asset('template/riho/js/jquery.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('template/riho/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('template/riho/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('template/riho/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
@if($is_admin)
<script src="{{ asset('template/riho/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('template/riho/js/scrollbar/custom.js') }}"></script>
@endif
<!-- Sidebar jquery-->
<script src="{{ asset('template/riho/js/config.js') }}"></script>
<!-- Theme js-->
@if($is_admin)
<script src="{{ asset('template/riho/js/script.js') }}"></script>
<script src="{{ asset('template/riho/js/theme-customizer/customizer.js') }}"></script>
@endif