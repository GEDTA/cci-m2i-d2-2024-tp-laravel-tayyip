<h1>retour en arriere <a href="../">ici</a></h1>
<a href="../associer-creer"> créer un nouveau ici</a>
<form action="{{ route('PAS EU LE TEMPS') }}">
@crsf
<label for="name">Nom</label>
<input type="text"
       name="name"
       id="name"
       value="{{old('name')}}">
<br>
<label for="email">Email</label>
<input type="email"
       name="email"
       id="email"
       value="{{old('email')}}">
<br>
<input type="submit" value="Créer">

</form>



    </div>