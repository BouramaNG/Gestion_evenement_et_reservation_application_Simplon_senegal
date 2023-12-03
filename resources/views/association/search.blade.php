  <div class="container">
        <h2>Résultats de la recherche</h2>

        @if($results->isEmpty())
            <p>Aucun résultat trouvé.</p>
        @else
            <ul>
                @foreach($results as $event)
                    <li>
                        <strong>Nom:</strong> {{ $event->libelle }}<br>
                        <strong>Lieu:</strong> {{ $event->lieux }}<br>
                       
                    </li>
                @endforeach
            </ul>
        @endif
    </div>