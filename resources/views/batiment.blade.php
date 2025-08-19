<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div>
        <h1>Batiment</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $batiment['nom'] }}</td>
                <td>{{ $batiment['description'] }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>