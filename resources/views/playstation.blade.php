<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Playstation</title>
</head>
<body>

    <header>

        <nav>
            <a href="{{route('home')}}">Ritorna al menu principale</a>
            <a href="{{route('xbox')}}">Xbox Series X Menu</a>
            <a href="{{route('nintendo')}}">Nintendo Switch Menu</a>
        </nav>

    </header>

    <main>

        <h3>{{$nome}}</h3>
        <h3>{{$produttore}}</h3>

        <ul>
        @foreach ($listaGiochi as $giochi)
            <li>{{$giochi}}</li>
        @endforeach
        </ul>

    </main>

</body>
</html>
