<?php



// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'male'],
    ['name' => 'Marco', 'surname' => 'Barone', 'gender' => 'male'],
    ['name' => 'Giovanni', 'surname' => 'Frivella', 'gender' => 'male'],
    ['name' => 'Ilaria', 'surname' => 'Colaianni', 'gender' => 'female'],
    ['name' => 'Sofia', 'surname' => 'Ceglie', 'gender' => 'female'],
    ['name' => 'Giorgia', 'surname' => 'Fanelli', 'gender' => 'female'],

];

// Creo una funzione che genera i saluti
$greet = array_map(function($users) {

    // inizio dicendo
    $saluto = "Buongiornissimo ";

    // se è maschio
    if ($users['gender'] === 'male') {
        $saluto .= "Sig. ";
    }

    // se è femmina
    elseif ($users['gender'] === 'female') {
        $saluto .= "Sig.ra ";
    }

    // aggiungo il nome e il cognome, quindi il saluto diventa completo
    $saluto .= $users['name'] . ' ' . $users['surname'];

    // genero il risultato del calcolo
    return $saluto;
}, $users);

// ciclo la stampa
foreach ($greet as $saluto) {
    echo $saluto . "\n";
}
?>