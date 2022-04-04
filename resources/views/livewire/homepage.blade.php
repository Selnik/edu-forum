<div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Témata</h4>
            <h6 class="text-muted card-subtitle mb-2">Seznam témat, ve kterých je možné vytvářet vlákna</h6>
            <p class="card-text">Témata může spravovat administrátor. Jedno téma může být věnované například jednomu školnímu předmětu, nebo populární studentské aktivitě&nbsp;</p>
            @forelse($topics as $topic)
            <livewire:display-item :item="$topic"/>
            @empty
                <p>Nikdo zatím nevytvořil žádné téma</p>
            @endforelse
            @if(Auth::check())
                @if(Auth::user()->isAdmin)
                    <hr />
                    <livewire:create-topic/>
                @endif
            @endif
        </div>
    </div>
</div>
