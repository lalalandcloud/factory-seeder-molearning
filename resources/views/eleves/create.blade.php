<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('eleves.store') }}" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="number" name="age" placeholder="Âge" required>
    <input type="checkbox" name="employe"> Employé
    <button type="submit">Créer</button>
</form>
    
</body>
</html>