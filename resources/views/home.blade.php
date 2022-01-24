<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    @foreach($packages as $package)
    <article>
        <p><strong>Going to:</strong> {{ $package->going_to }}</p>
        <p><strong>Leaving from:</strong> {{ $package->leaving_from }}</p>
        <p><strong>Departing:</strong> {{ $package->departing }}</p>
        <p><strong>Returning:</strong> {{ $package->returning }}</p>
        <p><strong>Room:</strong> {{ $package->room }}</p>
        <p><strong>Travellers:</strong> {{ $package->travellers }}</p>
        @if(!$loop->last)
        <hr />
        @endif
    </article>
    @endforeach
</body>

</html>