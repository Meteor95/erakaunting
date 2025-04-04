@extends('paneladmin.template')
@section('main_content')
<div class="container-fluid">
    <div class="row">
    <div class="col-xl-5 d-none d-xl-block" style="background-color: #eef4f4;">
        <div class="login-card-gambar"> 
            <h1>Selamat Datang Di <span class="txt-primary"> Erakaunting</span></h1>
            <h6>Kami akan membantu anda mengoptimalkan semua proses kerja dan pencatatan keuangan bisnis anda serta meningkatkan produktivitas anda</h6>
            <img class="bg-center" src="{{ asset('template/riho/images/login/3.png') }}" alt="Gambar Login Page Erakaunting">
        </div>
    </div>
    <div class="col-xl-7 col-sm-12 p-0">    
        <div class="login-card login-dark" style="background-color: #eef4f4;">
        <div>
            <div><a class="logo text-start" href="{{ url('') }}"> <img style="max-width:500px" class="img-fluid for-dark" src="{{ asset('template/riho/images/login/logo_aciraba.png') }}" alt="looginpage"><img style="max-width:500px" class="img-fluid for-light" src="{{ asset('template/riho/images/login/logo_aciraba.png') }}" alt="looginpage"></a></div>
            <div class="login-main"> 
            <div class="theme-form">
                <h4>{{ __('auth.title_login')}}</h4>
                <p>{{ __('auth.sub_title_login')}}</p>
                <div class="form-group">
                <label class="col-form-label">Surel atau Nama Pengguna</label>
                <input class="form-control" type="text" id="username" required="" placeholder="administrator@erayadigital.com" value="administrator@erayadigital.com">
                </div>
                <div class="form-group">
                <label class="col-form-label">Kata Sandi</label>
                <div class="form-input position-relative">
                    <input class="form-control" type="password" id="password" required="" placeholder="*********" value="password">
                    <div style="cursor:pointer" id="show-hide" class="show-hide"><i class="fas fa-eye-slash"></i></div>
                </div>
                </div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block w-100" type="button" id="loginProcessAct"><i class="fa-solid fa-person-to-door"></i> Masuk Ke Panel Admin</button>
                </div>
                <p class="mt-4 mb-0 text-center">Belum Punya Akun?<a class="ms-2" href="javascript:void(0)">Buat Akun</a>
                <br>
                Visitor ID : <span id="visitor_id"></span>
                <br>
                App Version : <span id="app_version">{{ env('APP_VERSION')}}</span>
                </p>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
@push('scripts')
    @vite('resources/eds/js/auth/app_auth.js')
@endpush