<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME') }} - {{ $title }}</title>
</head>
<body>
<navbar>
    <ul>
        <li><a href="./associer/">Associer</a></li>
        @foreach($menu as $item)

            <li><a href="{{ $item['url']??"" }}">{{ $item['nom'] }}</a></li>
        @endforeach
    </ul>
</navbar>

<h1>NOUS SOMMES PEPINA :) </h1>

<footer>

</footer>
</body>
</html>