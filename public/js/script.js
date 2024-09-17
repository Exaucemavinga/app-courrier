// script.js
document.getElementById('myFormulaire').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi automatique du formulaire

    if (confirm("Voulez-vous vraiment envoyer ce formulaire ?")) {
        // Si l'utilisateur clique sur "OK", le formulaire est envoyé
        this.submit();
    } else {
        // Si l'utilisateur clique sur "Annuler", rien ne se passe
        alert("Envoi annulé.");
    }
});



// script.js
document.getElementById('myFormulaire').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi automatique du formulaire

    let champ = document.getElementById('reference_note').value;
    let erreur = document.getElementById('erreur');
    let regex = /^[a-zA-Z0-9]+$/; // Expression régulière pour vérifier les caractères alphanumériques

    if (!regex.test(champ)) {
        erreur.textContent = "Veuillez entrer uniquement des caractères alphanumériques.";
    } else {
        erreur.textContent = "";
        // Si tout est correct, le formulaire peut être envoyé
        this.submit();
    }
});




// script.js
// document.getElementById('myFormulaire').addEventListener('submit', function(event) {
//     event.preventDefault(); // Empêche l'envoi automatique du formulaire

//     let reference_note = document.getElementById('reference_note').value;
//     let reference_noteErreur = document.getElementById('reference_noteErreur');

//     if (reference_note === "") {
//         reference_noteErreur.textContent = "Le numéro de reférence est requis.";
//     } else {
//         reference_noteErreur.textContent = "";
        // Si tout est correct, le formulaire peut être envoyé
//         this.submit();
//     }
// });


// script.js
// document.getElementById('monFormulaire').addEventListener('submit', function(event) {
//     event.preventDefault(); // Empêche l'envoi automatique du formulaire

//     let nom = document.getElementById('nom').value;
//     let nomErreur = document.getElementById('nomErreur');

//     if (nom === "") {
//         nomErreur.textContent = "Le nom est requis.";
//     } else {
//         nomErreur.textContent = "";

        // Simuler une requête serveur
//         fetch('https://exemple.com/api/formulaire', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify({ nom: nom })
//         })
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Erreur serveur');
//             }
//             return response.json();
//         })
//         .then(data => {
//             alert('Formulaire envoyé avec succès !');
//         })
//         .catch(error => {
//             alert('Une erreur est survenue : ' + error.message);
//         });
//     }
// });
