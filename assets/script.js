// Modal récapitulative
function openModal() {
  const modal = new bootstrap.Modal(document.getElementById("exampleModal"));
  modal.show();
}

// Modal modification de la tâche
// Récupérer le bouton "Modifier"
const closeAndOpenModalBtn = document.getElementById('closeAndOpenModalBtn');

// Ajouter un gestionnaire d'événements pour le clic sur le bouton "Modifier"
closeAndOpenModalBtn.addEventListener('click', function() {
    // Fermer la modal actuelle
    const currentModal = document.querySelector('.modal.show');
    const currentModalInstance = bootstrap.Modal.getInstance(currentModal);
    currentModalInstance.hide();

    // Afficher la nouvelle modal
    const nouvelleModal = document.querySelector('.nouvelle-modal');
    const nouvelleModalInstance = new bootstrap.Modal(nouvelleModal);
    nouvelleModalInstance.show();
});