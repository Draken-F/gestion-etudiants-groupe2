<?php
$xml = simplexml_load_file("../data/etudiants.xml");
foreach ($xml->etudiant as $etudiant) {
    echo "ID: " . $etudiant->id . "\n";
    echo "Nom: " . $etudiant->nom . "\n";
    echo "Module: " . $etudiant->module . "\n\n";
}
?>
