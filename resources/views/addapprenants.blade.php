

<form action="/insertapprenants" method="get">
    <input type="text" name="nameapprenants" id="">
    <input type="text" name="emailapprenants" id="">
    <input type="hidden" name="promoapprenants" value="{{ $id }}">
    <button>click</button>
</form>










{{-- 

<form action="/insertapprenants" method="get">
    <input type="text" name="nameapprenants" id="" placeholder="name">
    <input type="text" name="emailapprenants" id="" placeholder="email">
    <button>Ajouter</button>
</form>




<div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>PromotionID</th>
            <th>Actions</th>
        </tr>
        @foreach ($selectapprenants as $rowappr)

        <tr>
        <td> {{ $rowappr->id }}  </td>
        <td>{{ $rowappr->name }}</td>
        <td> {{ $rowappr->email }}</td> 
        <td> {{ $rowappr->id_promo }}</td> 

        <th><a href="/delete?id={{ $rowappr->id }}">Delete</a> </th>
        <th><a href="/update_apprenants/{{ $rowappr->id }}">/ Edit </a></th>
    </tr>
    @endforeach
</table>
</div> --}}
