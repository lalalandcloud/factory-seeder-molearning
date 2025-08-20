<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ARTICLES</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $a)
            <tr>
                    <td>{{ $a['nom'] }}</td>
                    <td>{{ $a['prix'] }} €</td>
                    <td>{{ $a['decription'] }}</td>
                    <td><img src="{{ asset('storage/'. $a->photo) }}" alt="" width="200"></w-200></td>
            </tr>
            @endforeach

        </tbody>
    </table>

    
</body>
</html>