<div class="card" style="margin-top: 1em;">
    <form action="{{ route('thread.store') }}" method="POST">
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
            <h4>Vytvořit vlákno</h4>
            <p class="text-muted m-0">{{$problemsName}}</p>
            <p class="text-muted m-0">{{$problemsDescription}}</p>
            <input class="border rounded border-primary shadow-sm" type="text" name="name" wire:model="name" wire:keydown="check" wire:keyup="check" wire:change="check" placeholder="Jméno nového vlákna" required="" minlength="2" maxlength="100" style="width: 80%;">
        </div>
        <div class="card-body">
            <textarea class="border rounded border-primary" style="width: 95%;" name="description" wire:model="description" wire:keydown="check" wire:keyup="check" wire:change="check" placeholder="Popis nového tématu" required="" minlength="2" maxlength="300" ></textarea>
            <input type="hidden" value="{{$topic->id}}" name="topic" id="topic">
            <button class="btn btn-primary border rounded  @if($problemsName != '' or $problemsDescription != '') disabled @endif" type="submit" style="margin: auto;">Vytvořit nové vlákno</button></div>
    </form>
</div>
