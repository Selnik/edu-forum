<x-app-layout>
    <div class="mb-4 mx-3">
        <p>
            <a href="{{route('home')}}">Domů</a>-><a href="{{route('topic.show', $topic)}}">{{$topic->name}}</a>-><a href="{{route('thread.show', $thread)}}">{{$thread->name}}</a>
        </p>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$thread->name}}</h4>
            <h6 class="text-muted card-subtitle mb-2">{{$thread->description}}</h6>
            <hr />
            <p class="text-muted">Vytvořeno uživatelem {{$thread->user()->first()->name}}</p>
            @forelse($replies as $reply)
                <livewire:display-item :item="$reply"/>
            @empty
                <h1>Žádné odpovědi</h1>
            @endforelse
            @if(Auth::check())
                <livewire:create-reply :thread="$thread"/>
            @endif
        </div>
    </div>
</x-app-layout>
