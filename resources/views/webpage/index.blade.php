<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Traveling!</h1>
    <ul>
        @foreach ($data as $value)
        <li><a href="/travel/{{ $value->kode_country}}">{{ $value->nama_country }}</a></li>
        @endforeach
    </ul>
</body>
</html>