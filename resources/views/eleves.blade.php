<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div>
        <h1>eleve</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>age</th>
                <th>employe?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $eleve)            
            <tr>
                <td>{{ $eleve['nom'] }}</td>
                <td>{{ $eleve['prenom'] }}</td>
                <td>{{ $eleve['age'] }}</td>
                <td>{{ $eleve->employe ? 'oui' : 'non' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a href="{{ route('eleves.create') }}">Ajouter un élève</a>
    </div>
</body>
</html>