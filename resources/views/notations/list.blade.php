@if (session('success'))
<script>
    // Récupérer le message de succès depuis la variable de session
    var successMessage = '{{ session('success') }}';

    // Créer une boîte de dialogue personnalisée
    var successDialog = document.createElement('div');
    successDialog.classList.add('success-dialog');
    successDialog.innerHTML = '<div class="success-dialog-content">' + successMessage + '</div>';

    // Ajouter la boîte de dialogue au document
    document.body.appendChild(successDialog);

    // Fermer la boîte de dialogue après 3 secondes
    setTimeout(function() {
        document.body.removeChild(successDialog);
    }, 3000);
</script>

<style>
    .success-dialog {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #4CAF50;
        color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .success-dialog-content {
        font-size: 16px;
        font-weight: bold;
    }
</style>
@endif

    @foreach ($notations->groupBy('univ_id') as $univId => $univNotations)
        @php
            $universityName = \App\Models\University::find($univId)->univ_name;
        @endphp
        <div class="university">
            <h3>Université: {{ $universityName }}</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Critère</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($univNotations as $notation)
                        <tr>
                            <td>{{ $notation->criteria->libelle }}</td>
                            <td>{{ $notation->score }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
