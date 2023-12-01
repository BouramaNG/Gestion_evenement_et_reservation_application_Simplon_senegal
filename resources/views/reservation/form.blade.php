<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style pour le formulaire de réservation */
form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style pour les groupes de champs */
.form-group {
    margin-bottom: 20px;
}

/* Style pour les étiquettes des champs */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
}

/* Style pour les champs de formulaire */
input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Style pour le bouton de soumission */
button {
    background-color: #007bff;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Style pour le message de connexion requis */
p {
    font-style: italic;
    color: #cc0000;
    margin-top: 20px;
}
/* Style pour les messages d'erreur de validation */
.error-message {
    color: #cc0000;
    margin-top: 5px;
}

    </style>
</head>
<body>
@if(Auth::check())
<div>
<div class="error-message">
    @error('reference')
        {{ $message }}
    @enderror
</div>

</div>
    <form action="{{ route('reservation') }}" method="POST">
        @csrf
        <input type="hidden" name="evenement_id" value="{{ $evenement->id }}">

        <div class="form-group">
            <label for="reference">Référence</label>
            <input type="text" name="reference" id="reference" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nombre_places">Nombre de places</label>
            <input type="number" name="nombre_places" id="nombre_places" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nombre_places">Date Reservation</label>
            <input type="date" name="reservation_date" id="nombre_places" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Statut</label>
            <select name="status" id="status" class="form-control" required>
                <option value="en_cours">En cours</option>
                <option value="ferme">En cours</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Réserver</button>
    </form>
@else
    <p>Connectez-vous pour effectuer une réservation.</p>
@endif
   
</body>
</html>