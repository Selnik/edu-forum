<div class="card" style="margin-top: 1em;">
    <form action="{{ route('reply.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-header">
            <h4>Odpovědět</h4>
            <p class="text-muted m-0">{{$problemsName}}</p>
            <p class="text-muted m-0">{{$problemsDescription}}</p>
            <input class="border rounded border-primary shadow-sm" type="text" name="name" wire:model="name" wire:keydown="check" wire:keyup="check" wire:change="check" placeholder="Jméno odpovědi" required="" minlength="2" maxlength="100" style="width: 80%;">
        </div>
        <div class="card-body">
            <textarea class="border rounded border-primary" style="width: 95%;" name="description" wire:model="description" wire:keydown="check" wire:keyup="check" wire:change="check" placeholder="Popis odpovědi" required="" minlength="2" maxlength="300" ></textarea>
            <input type="hidden" value="{{$thread->id}}" name="thread" id="thread">
            <button class="btn btn-primary border rounded" type="submit" style="margin: auto;">Odpovědět</button>
        </div>
    </form>
</div>
