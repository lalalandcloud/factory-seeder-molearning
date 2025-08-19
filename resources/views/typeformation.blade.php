<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div>
        <h1>typeFormation</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($typeformations as $typeformation)
            
            <tr>
                <td>{{ $typeformation['nom'] }}</td>
                <td>{{ $typeformation['description'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>