@extends('template.default')

@section('content')
    <h1>Pokedexs Update</h1>
    <form action="{{ url('/pokedexs/'.$Pokedexs_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="{{$Pokedexs_update->name}}">

        <label for="type">Type</label>
        <input class="form-control" type="text" name="type" id="type" value="{{$Pokedexs_update->type}}">

        <label for="species">Species</label>
        <input class="form-control" type="text" name="species" id="species" value="{{$Pokedexs_update->species}}">

        <label for="height">Height</label>
        <input class="form-control" type="decimal" name="height" id="height" value="{{$Pokedexs_update->height}}">

        <label for="weight">Species</label>
        <input class="form-control" type="decimal" name="weight" id="weight" value="{{$Pokedexs_update->weight}}">

        <label for="hp">Hp</label>
        <input class="form-control" type="decimal" name="hp" id="hp" value="{{$Pokedexs_update->hp}}">

        <label for="attack">Attack</label>
        <input class="form-control" type="decimal" name="attack" id="attack" value="{{$Pokedexs_update->attack}}">

        <label for="defense">Defense</label>
        <input class="form-control" type="decimal" name="defense" id="defense" value="{{$Pokedexs_update->defense}}">

        <label for="image_url">Image_url</label>
        <input class="form-control" type="number" name="image_url" id="image_url" value="{{$Pokedexs_update->image_url}}">

        <button class="btn btn-primary mt-3" type="submit">บันทึก</button>
    </form>
    @include('pokedexs.table')
@endsection
