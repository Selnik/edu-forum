<x-app-layout>
    <div class="mb-4 mx-3">
        <p>
    <a href="{{route('home')}}">Domů</a>-><a href="{{route('topic.show', $topic)}}">{{$topic->name}}</a>
        </p>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$topic->name}}</h4>
            <h6 class="text-muted card-subtitle mb-2">{{$topic->description}}</h6>
@forelse($threads as $thread)
  <livewire:display-item :item="$thread"/>
    @empty
        <h1>Žádná vlákna</h1>
@endforelse
            @if(Auth::check())
                <livewire:create-thread :topic="$topic"/>
            @endif
            </div>
        </div>
</x-app-layout>
