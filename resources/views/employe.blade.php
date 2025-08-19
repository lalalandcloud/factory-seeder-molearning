<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>employe</h2>
    
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employe as $e)
                <tr>
                    <td>{{ $e['nom'] }}</td>
                    <td>{{ $e['prenom'] }}</td>
                    <td>{{ $e['image'] }}</td>
                </tr>            
            @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{ route('employe.create') }}">Ajouter un employe</a>
    </div>



</body>
</html>