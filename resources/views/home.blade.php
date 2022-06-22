<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Laravel primi passi</title>
</head>
<body>

    <header>
        <h1>{{$hello}}</h1>
    </header>

    <header>
        <h1>Home Menu</h1>

        <nav>
            <a href="{{route('playstation')}}">Playstation 5 Menu</a>
            <a href="{{route('xbox')}}">Xbox Series X Menu</a>
            <a href="{{route('nintendo')}}">Nintendo Switch Menu</a>
        </nav>

    </header>


</body>
</html>
