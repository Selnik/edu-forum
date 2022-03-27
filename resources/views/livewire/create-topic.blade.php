<div class="card" style="margin-top: 1em;">
    <form action="{{ route('topic.store') }}" method="POST">
        @csrf
    <div class="card-header">
        <h4>Vytvořit téma</h4>
        <p class="text-muted m-1">{{$problemsName}}</p>
        <p class="text-muted m-1">{{$problemsDescription}}</p>
        <input class="border rounded border-primary shadow-sm" type="text" name="name" wire:model="name" wire:keydown="check" wire:change="check" placeholder="Jméno nového tématu" required="" minlength="1" maxlength="300" style="width: 80%;">
    </div>
    <div class="card-body">
        <textarea class="border rounded border-primary" style="width: 95%;" name="description" wire:model="description" wire:keydown="check" wire:change="check" placeholder="Popis nového tématu"></textarea>
            <button class="btn btn-primary border rounded  @if($problemsName != '' or $problemsDescription != '') disabled @endif" type="submit" style="margin: auto;">Vytvořit nové téma</button></div>
    </form>
</div>
