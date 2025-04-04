@extends('paneladmin.template')
@section('main_content')
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('paneladmin.component.header')                         
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
    @include('paneladmin.component.menu')   
    @yield('content_erakaunting')
    @include('paneladmin.component.footer')
    </div>
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
@vite(['resources/assets/js/app_admin.js'])
@endpush