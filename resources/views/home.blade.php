<x-app-layout>
    <livewire:homepage/>
@if(Auth::check())
<form action="{{ route('topic.store') }}" method="POST">
    @csrf
    <h1>Vytvořit téma</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>
    @endif
    <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Jméno tématu">
    <input type="text" name="description" id="description" value="{{old('description')}}" placeholder="Popis tématu">
    <button type="submit">Vytvořit téma</button>

</form>
    @endif
</x-app-layout>

