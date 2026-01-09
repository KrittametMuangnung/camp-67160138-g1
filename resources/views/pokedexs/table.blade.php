<h1>Pokedexs Lists</h1>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Type</td>
            <td>Species</td>
            <td>Height</td>
            <td>Weight</td>
            <td>Hp</td>
            <td>Attack</td>
            <td>Defense</td>
            <td>Image_url</td>
            <td></td>
        </tr>
    </thead>
    <?php foreach($pokedexs as $item) {?>
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->species }}</td>
        <td>{{ $item->height }}</td>
        <td>{{ $item->weight }}</td>
        <td>{{ $item->hp }}</td>
        <td>{{ $item->attack }}</td>
        <td>{{ $item->defense }}</td>
        <td>
            @if($item->image_url)
                    <img src="{{ $item->image_url }}" alt="pokemon" width="50" style="border-radius: 5px; border: 1px solid #ddd;">
                @else
                    <small class="text-muted">ไม่มีรูป</small>
                @endif
        </td>

        <td>
            <a class="btn btn-warning" href="{{ url('/pokedexs/' . $item->id . '/edit') }}">
                แก้ไข
            </a>
            <form
                style="display:inline-block"
                action="{{url('/pokedexs/'. $item->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">ลบ</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
