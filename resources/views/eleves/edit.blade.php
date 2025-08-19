<form action="{{ route('eleves.update', $eleves) }}" method="POST">
    @csrf
    @method('PUT')
    
    <input type="text" name="nom" value="{{ $eleves->nom }}" required>
    <input type="text" name="prenom" value="{{ $eleves->prenom }}" required>
    <input type="number" name="age" value="{{ $eleves->age }}" required>
    <input type="checkbox" name="employe" {{ $eleves->employe ? 'checked' : '' }}> Employé

    <button type="submit">Modifier</button>
</form>