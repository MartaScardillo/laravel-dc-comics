<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>DC Comics</h1>
        <ul>
            <li><a href="{{ route('comics.create') }}">Crea un nuovo comic</a></li>
            <li><a href="{{ route('comics.index') }}">Visualizza tutti i comics</a></li>
        </ul>
    </div>
</body>
</html>