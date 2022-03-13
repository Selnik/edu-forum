<x-app-layout>
    <h1>{{$thread->name}}</h1>
    <p>{{$thread->text}}</p>
    @if(Auth::check())
        <form action="{{ route('reply.store') }}" method="POST">
            @csrf
            <h1>Odpovědět</h1>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>

                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Nadpis odpovědi">
            <input type="text" name="text" id="text" value="{{old('text')}}" placeholder="Odpověď">
            <input type="hidden" value="{{$thread->id}}" name="thread" id="thread">
            <button type="submit">Odpovědět</button>
        </form>
    @endif
    @forelse($replies as $reply)
        <h1>{{$reply->name}}</h1>
        <p>{{$reply->text}}</p>
    @empty
        <h1>Žádné odpovědi</h1>
    @endforelse
</x-app-layout>
