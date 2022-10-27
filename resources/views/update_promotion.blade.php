
<form action="/edit/{{ $promotion[0]->id }}" method="get">

    <input type="text" name="name" value="{{ $promotion[0]->name }} ">
    
    <button>Edit</button>

</form>


<input type="text" id="search" placeholder="search">

<button><a href="{{ URL('addapprenants/' . $promotion[0]->id) }}">Add</a></button>

<table>
    <thead>
        <th>Nom</th>
        <th>Email</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @if ($apprenants[0]->id_app !=null)

            @foreach ($apprenants as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                     <td>
                        <a href="/update_apprenants/{{ $row->id_app }}">Edit </a> 
                        <a href="/deleteapprenants?id={{ $row->id_app }}">/Delete </a> 
                    </td> 
                </tr>
                <input type="hidden" id="idsearch" value="{{ $row->id_promo }}">
            @endforeach
        @endif
    </tbody>
</table>

<script src="{{ URL::asset('js/searchappr.js') }}"></script>


