<!doctype html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="PT. Eraya Digital Solusindo">
    <link rel="icon" href="{{ asset('template/riho/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('template/riho/images/favicon.png') }}" type="image/x-icon">
    <title>{{ $data['title'] ?? 'Erakaunting - Panel Admin' }}</title>
    @include('paneladmin.template.head_panel_admin')
    @stack('styles')
    @stack('last-styles')
</head>

<body>
    @yield('main_content')
    @include('paneladmin.template.footer_panel_admin',['is_admin' => $data['is_admin'] ?? false])
    @stack('scripts')
    @stack('last-scripts')
</body>

</html>
