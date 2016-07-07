<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>shortURL</title>
</head>
<body>

@foreach ($shorts as $short)

<div> {{ $short }} </div>

@endforeach

</body>
</html>