<!doctype html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domů - EduForum</title>
</head>
<body>
<h1>Vítej na Educhem fóru</h1>
@if(Auth::check())
    @if (session('succes'))
        <div>
            {{ session('succes') }}
        </div>
    @endif
    <form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit ">Odhlásit se</button>
        @endif
</form>
</body>
</html>
