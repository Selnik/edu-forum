<!DOCTYPE html>
<html lang="cs-CZ">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduForum</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
@include('layouts.header')
<div class="min-vh-100 p-3">
    {{ $slot }}
</div>
@include('layouts.footer')
@stack('scripts')
</body>

</html>
