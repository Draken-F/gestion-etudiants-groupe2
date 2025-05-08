<?php
$xml = simplexml_load_file("../data/etudiants.xml");
foreach ($xml->etudiant as $etudiant) {
    if (empty($etudiant->id) || empty($etudiant->nom) || empty($etudiant->module)) {
        echo "Erreur : Donnée manquante\n";
    } else {
        echo "ID: " . $etudiant->id . " est valide\n";
    }
}
?>
