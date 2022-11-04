<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <div>
        @foreach($trains as $train)
            <div>
                <h3>{{ $train['azienda'] }}</h3>
                <p>From {{ $train['stazione_partenza'] }} to {{ $train['stazione_arrivo'] }}</p>
                <p>{{ $train['orario_partenza'] }}</p>
            </div>

        @endforeach
    </div>
</body>
</html>