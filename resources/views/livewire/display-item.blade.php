<div class="card" style="margin-top: 1em;">
    @if(!$this->editMode)
        <div class="card-header d-flex"><a class="d-lg-flex justify-content-lg-start" href="{{route($model . '.show', $item)}}" style="width: 70%;">
            <h5 class="d-lg-flex justify-content-lg-start mb-0" style="width: 100%;" text="">{{$item->name}}</h5>

        </a>
            @if($this->canEdit)<div class="d-flex d-sm-flex d-md-flex d-lg-flex justify-content-end justify-content-sm-end justify-content-md-end justify-content-lg-end" href="#" style="width: 30%;"><button wire:click="changeToEdit" class="btn btn-secondary m-1" >Upravit</button></div><form action="{{route($model . '.destroy', $item)}}" method="POST" >@csrf @method('DELETE')<button class="btn btn-danger m-1" type="submit">Odstranit</button> </form>@endif
    </div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>
        @endif
    <div class="card-body">
        <p class="card-text" style="margin-bottom: 1em;">{{$item->description}}</p>
        @if($model != 'topic')
            <hr />
            <p class="text-muted">Vytvořeno uživatelem {{$item->user->name}}</p>
        @endif

    </div>
    @else
        <form method="POST" action="{{route($model . '.update', $item)}}">
            @csrf
            @method("PATCH")
        <div class="card-header">

            <input class="border rounded border-primary shadow-sm" type="text" name="name"required="" minlength="1" maxlength="300" value="{{$item->name}}" style="width: 80%;">
            <button type="button" wire:click="changeToNotEdit" class="btn btn-secondary" style="margin-left: 9%;" >Zpět</button>
        </div>
        <div class="card-body">
            <textarea class="border rounded border-primary" style="width: 95%;" id="description" name="description">{{$item->description}}</textarea>
            <button class="btn btn-primary border rounded btn-block btn-lg my-2 " type="submit" style="margin: auto;">Uložit</button></div>
        </form>
    @endif
</div>
