
<form action="/edit/{{ $promotion[0]->id }}" method="get">

    <input type="text" name="name" value="{{ $promotion[0]->name }} ">
    
    <button>Edit</button>

</form>

<table>
    <thead>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Actions</th>
    </thead>
    <tbody>
            @foreach ($apprenants as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->email }}</td>
                    {{-- <td>
                        <a href="{{ route('edit_appr', ['id_appr' => $row->id_appr]) }}"> Edit </a>
                        <a href="{{ route('delete_appr', ['id_appr' => $row->id_appr]) }}"> Delete </a>
                    </td> --}}
                </tr>
            @endforeach
    </tbody>
</table>


