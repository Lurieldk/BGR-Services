<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $formation = htmlspecialchars($_POST['formation']);

    // Affichage des données pour vérification
    echo "<h1>Détails de l'inscription</h1>";
    echo "Nom : " . $nom . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Téléphone : " . $telephone . "<br>";
    echo "Formation choisie : " . $formation . "<br>";

    // Enregistrement ou autres traitements (comme envoyer un email)
}
?>
header("Location: confirmation.html");
exit;
if (empty($nom) || empty($email)) {
    echo "Tous les champs sont obligatoires.";
    exit;
}
