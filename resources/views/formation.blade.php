<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div>
        <h1>formation</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formations as $formation)
            
            <tr>
                <td>{{ $formation['nom'] }}</td>
                <td>{{ $formation['description'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>