// $(document).ready(function() {
//     // Soumettre le formulaire via AJAX lorsqu'il est soumis
//     $('form[name="notationForm"]').submit(function(e) {
//         e.preventDefault();
//         var formData = $(this).serialize();
//         var univId = $(this).data('univ-id');
//         // Récupérer l'ID de l'université
//         console.log(univId);
//         $.ajax({
//             url: '/notations/store/' + univId, // Utiliser l'ID de l'université dans l'URL
//             type: 'POST',
//             data: formData,
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
//             success: function(data) {
//                 // Afficher un message de succès
//                 showSuccessModal('Notation enregistrée avec succès !');
//                 // Fermer le modal
//                 $('#ratingModal-' + univId).modal('hide');
//             },
//             error: function(xhr, status, error) {
//                 console.error(error);
//                 alert(
//                     'Une erreur est survenue lors de l\'enregistrement de la notation.'
//                 );
//             }
//         });

//     });
// });
var bouton = document.getElementById('btnValider');

// Ajoutez un écouteur d'événements pour l'événement 'click'
bouton.addEventListener('click', function() {
    // Votre code JavaScript à exécuter lorsque le bouton est cliqué
    console.log('Le bouton a été cliqué !');
});

// document.addEventListener('DOMContentLoaded', function() {
//     // Ajoutez un écouteur d'événements sur le clic du bouton de validation
//     document.getElementById('btnValider').addEventListener('click', function(event) {
//         // Empêcher le comportement par défaut du formulaire
//         event.preventDefault();

//         // Récupérer l'ID de l'université à partir des données attribut "data-univ-id"
//         var univId = document.forms['notationForm'].getAttribute('data-univ-id');

//         // Récupérer les valeurs des scores à partir des champs de formulaire
//         var scores = {};
//         var inputs = document.forms['notationForm'].querySelectorAll('input[type="range"]');
//         inputs.forEach(function(input) {
//             scores[input.name] = input.value;
//         });

//         // Récupérer l'ID de l'utilisateur à partir du champ de formulaire caché
//         var userId = document.forms['notationForm'].querySelector('input[name="user_id"]').value;

//         // Afficher les valeurs dans la console
//         console.log("ID de l'université:", univId);
//         console.log("Scores:", scores);
//         console.log("ID de l'utilisateur:", userId);

//         // Envoyer les données du formulaire à votre endpoint API ou à une autre fonction de traitement
//         // Ici, vous pouvez appeler votre fonction AJAX pour envoyer les données au backend
//     });
// });








// document.getElementById('btnValider').addEventListener('click', function() {
//     // Récupérer les données du formulaire
//     var formData = new FormData(document.forms['notationForm']);

//     // Envoyer les données via une requête AJAX
//     fetch('{{ route("notations.store") }}', {
//         method: 'POST',
//         body: formData,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Erreur lors de la requête.');
//         }
//         return response.json();
//     })
//     .then(data => {
//         // Afficher un message de succès ou effectuer d'autres actions si nécessaire
//         console.log(data);
//     })
//     .catch(error => {
//         console.error('Erreur:', error);
//     });
// });
