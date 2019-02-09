<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello, we are {{ $data->name }} 's agency!</h1>
    <p>{{ $data->description }}</p>
    <h5>Language : {{ $data->language }}</h5>
    <h5>Agency for : {{ $data->experience }}</h5>
    <h5>Joined : {{ $data->created_at->diffInYears() }} Years</h5>
    <h1>Review :</h1>
    @foreach ($data->reviews as $item)
        <p>{{ $item->user->name }}'s Review : </p>
        <ul>
            <li>Rating : {{ $item->rating }}</li>
            <li>Plus : {{ $item->good_review }}</li>
            <li>Minus : {{ $item->bad_review }}</li>
            <li>Summary : {{ $item->summary }}</li>
        </ul>
    @endforeach
</body>
</html>