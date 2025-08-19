<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('employe.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="file" name="photo">
    <button type="submit">Créer</button>
</form>
    
</body>
</html>

