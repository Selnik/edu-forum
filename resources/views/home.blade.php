<x-app-layout>
<h1>Vítej na Educhem fóru</h1>
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
        <li>{{$topic->name}}, {{$topic->description}}, {{$topic->threads}}</li>
        <form action="{{ route('thread.store') }}" method="POST">
            @csrf
        <h1>Vytvořit vlákno</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>
        @endif
        <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Jméno vlákna">
        <input type="text" name="text" id="text" value="{{old('description')}}" placeholder="Popis vlákna">
        <input type="hidden" value="{{$topic->id}}" name="topic" id="topic">
        <button type="submit">Vytvořit vlákno</button>
        </form>
    @empty
        Prázdné
    @endforelse
</ul>
</x-app-layout>

