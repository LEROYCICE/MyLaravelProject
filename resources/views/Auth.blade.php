<form action="{{route('auth.store')}}" method="post">
    @csrf
    @method('POST')
    @if (Session::has('Echec'))
    <h3 style="color: red">{{Session::get('Echec')}}</h3>
    @endif

    <input type="text" name="nom" id="nom" placeholder="Votre nom"> <br> <br>
    <input type="password" name="passe" id="passe" placeholder="Votre password"> <br> <br>
     <button type="submit">Se connecter</button>
</form>