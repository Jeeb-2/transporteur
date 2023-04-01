<?php

// Connexion à la base de données
$conn = mysqli_connect("localhost", "votre_nom_utilisateur", "transporteur", "transporteur");

// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupérer l'adresse email soumise dans le formulaire
$email = $_POST["email"];

// Insérer l'adresse email dans la table "newsletter"
$sql = "INSERT INTO newsletter (email) VALUES ('$email')";

if (mysqli_query($conn, $sql)) {
    echo "Merci de vous être inscrit à notre newsletter !";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);

?>