<!-- Sélecteur de critères -->
<div id="classement">
    <!-- Le classement sera affiché ici -->
</div>

<script>
    document.getElementById('selectCritere').addEventListener('change', function() {
        var selectedCritereId = this.value;
        updateClassement(selectedCritereId);
    });

    // Fonction pour mettre à jour le classement en fonction du critère sélectionné
    function updateClassement(critereId) {
        // Appeler votre route Laravel pour récupérer le classement en fonction du critère sélectionné
        fetch('/classements/' + critereId)
            .then(response => response.text())
            .then(data => {
                // Mettre à jour la section du classement dans votre vue
                // Par exemple, mettre à jour le contenu d'une div avec l'ID 'classement'
                document.getElementById('classement').innerHTML = data;
            })
            .catch(error => {
                console.error('Une erreur est survenue :', error);
            });
    }
</script>
