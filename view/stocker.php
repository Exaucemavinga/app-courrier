<!-- pour recuperer les données saisies dans le formulaire -->
<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_entree_document = $_POST['numero_entree_document'];
    $expediteur = $_POST['expediteur'];
    $reference_note = $_POST['reference_note'];
    $date_reception = $_POST['date_reception'];
    $objet = $_POST['objet'];

    // Connexion à la base de données
    $conn = new mysqli('localhost', 'root', '', 'courrier_db');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO reception (numero_entree_document, expediteur, reference_note, date_reception, objet) VALUES ('$numero_entree_document', '$expediteur', '$reference_note', '$date_reception', '$objet')";

    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement réussi !";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

header("Location: enregistrements.php");
?>



<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'courrier_db');

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Requête pour récupérer les données
$sql = "SELECT id, nom FROM categories";
$result = $conn->query($sql);

// Générer le formulaire avec les options dynamiques
echo '<form method="post" action="votre_script.php">';
echo '<label for="choix">Choisissez une catégorie :</label>';
echo '<select name="choix" id="choix">';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["id"] . '">' . $row["nom"] . '</option>';
    }
} else {
    echo '<option value="">Aucune catégorie disponible</option>';
}
echo '</select>';
echo '<input type="submit" value="Envoyer">';
echo '</form>';

$conn->close();
?>