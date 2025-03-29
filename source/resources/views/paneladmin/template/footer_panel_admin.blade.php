@vite(['resources/assets/js/app.js'])
@if($is_admin)
    @vite(['resources/assets/js/app_admin.js'])
@endif
