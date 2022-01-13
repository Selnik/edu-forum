<!doctype html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduForum - Přihlášení</title>
</head>
<body>
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    </div>
    @endif
<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="text" placeholder="Email" id="email" name="email" value="{{old('email')}}" required>
    <input type="password" placeholder="Heslo" id="password" name="password" required>
    <input type="checkbox" checked id="remember" name="remember" placeholder="Zapamatovat si mě">
    <input type="submit">
</form>
</body>
</html>
