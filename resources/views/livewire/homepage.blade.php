<div>
    <h1 class="display-1 fw-bolder text-start" style="margin-top: 0.5em;color: var(--bs-blue);text-shadow: 0px 3px 4px;">EduForum</h1>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Témata</h4>
            <h6 class="text-muted card-subtitle mb-2">Seznam témat, ve kterých je možné vytvářet vlákna</h6>
            <p class="card-text">Témata mohou spravovat administrátoři. Jedno téma může být věnované například jednomu školnímu předmětu, nebo populární studentské aktivitě&nbsp;</p>
            @forelse($topics as $topic)
            <div class="card" style="margin-top: 1em;">
                <a style="text-decoration: none" href="{{route('topic.show', $topic)}}">
                    <div  class="card-header">
                    <h5 class="mb-0">{{$topic->name}}</h5>
                </div>
                </a>
                <div class="card-body">
                    <p class="card-text" style="margin-bottom: 1em;">{{$topic->description}}</p>
                </div>
            </div>
            @empty
                <p>Nikdo zatím nevytvořil žádné téma</p>
            @endforelse
        </div>
    </div>
</div>
