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
@if(!Auth::check())
<a href="{{route('login')}}">Přihlásit se</a>
@endif
    @if (session('succes'))
        <div>
            {{ session('succes') }}
        </div>
    @endif
@if(Auth::check())
    <form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit ">Odhlásit se</button>
    </form>
        @endif
@if(Auth::check())
<form action="{{ route('topic.store') }}" method="POST">
    @csrf
    <h1>Vytvořit téma</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>
    @endif
    <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Jméno tématu">
    <input type="text" name="description" id="description" value="{{old('description')}}" placeholder="Popis tématu">
    <button type="submit">Vytvořit téma</button>

</form>
    @endif
<ul>
    @forelse($topics as $topic)
        <li>{{$topic->name}}, {{$topic->description}}</li>
    @empty
        Prázdné
    @endforelse
</ul>
</body>
</html>

