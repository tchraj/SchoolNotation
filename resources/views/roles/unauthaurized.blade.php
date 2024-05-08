<!-- HTML pour la boîte de dialogue modale -->
<div class="modal fade" id="unauthorizedModal" tabindex="-1" aria-labelledby="unauthorizedModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="unauthorizedModalLabel">Accès non autorisé</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vous n'êtes pas autorisé à accéder à cette page.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript pour afficher la boîte de dialogue modale -->
<script>
    // Fonction pour afficher la boîte de dialogue modale
    function showUnauthorizedModal() {
        $('#unauthorizedModal').modal('show');
    }
</script>
