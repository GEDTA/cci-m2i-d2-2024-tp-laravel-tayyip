<h1>retour en arriere <a href="../">ici</a></h1>
<a href="../associer-creer"> créer un nouveau ici</a>
<p>
    @foreach($users as $associe)

<div>{{ $associe->name }}</div>
<div>{{ $associe->email }}</div>
    @endforeach



</div>