<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    @foreach($css ?? [] as $c)
        <link rel="stylesheet" href="{{ asset("css/$c") }}">
    @endforeach
</head>
