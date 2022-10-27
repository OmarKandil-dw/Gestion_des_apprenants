<form action="/edit_apprenants/{{  $apprenant[0]->id  }}" method="get">

    <input type="text" name="name" value="{{ $apprenant[0]->name }}">
    <input type="text" name="email" value="{{ $apprenant[0]->email }}">
    <input type="hidden" name="id_promo" value="{{ $apprenant[0]->id_promo }}">

    <button>Save</button>
</form>
