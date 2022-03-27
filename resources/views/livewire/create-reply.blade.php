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
            <p></p>
            <input class="border rounded border-primary shadow-sm" type="text" name="name" placeholder="Jméno odpovědi" required="" minlength="1" maxlength="300" style="width: 80%;">
        </div>
        <div class="card-body">
            <textarea class="border rounded border-primary" style="width: 95%;" name="description" placeholder="Popis odpovědi"></textarea>
            <input type="hidden" value="{{$thread->id}}" name="thread" id="thread">
            <button class="btn btn-primary border rounded" type="submit" style="margin: auto;">Odpovědět</button>
        </div>
    </form>
</div>
