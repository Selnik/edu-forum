<x-app-layout>
    <h1>{{$topic->name}}</h1>
    <p>{{$topic->description}}</p>
    @if(Auth::check())
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
    @endif
@forelse($threads as $thread)
    <a href="{{route('thread.show', $thread)}}"><h1>{{$thread->name}}</h1></a>
    <p>{{$thread->text}}</p>
    @empty
        <h1>Žádná vlákna</h1>
@endforelse
</x-app-layout>
