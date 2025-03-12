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
            <div><a class="logo text-start" href="{{ url('') }}"> <img class="img-fluid for-dark" src="{{ asset('template/riho/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-light" src="{{ asset('template/riho/images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
            <div class="login-main"> 
            <div class="theme-form">
                <h4>Masukan Kredensial ID Kamu</h4>
                <p>Masukan surel dan katasandi untuk melanjutkan mengelola keuangan bisnis anda</p>
                <div class="form-group">
                <label class="col-form-label">Surel atau Nama Pengguna</label>
                <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                <label class="col-form-label">Kata Sandi</label>
                <div class="form-input position-relative">
                    <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                </div>
                </div>
                <div class="form-group mb-0">
                <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Simpan untuk perangkat ini</label>
                </div>
                <button class="btn btn-primary btn-block w-100" type="submit">Masuk</button>
                </div>
                <p class="mt-4 mb-0 text-center">Belum Punya Akun?<a class="ms-2" href="sign-up.html">Buat Akun</a></p>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush
