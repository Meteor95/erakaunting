<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
@vite(['resources/assets/js/app.js'])
@if($is_admin)
    @vite(['resources/assets/js/app_admin.js'])
@endif
<script>
    var baseurlapi = "{{ env('APP_VERSI_API') }}";
    var baseurl = "{{ url('') }}";
</script>