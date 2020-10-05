<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungete 1 trait a piacere -->
<?php
require_once 'classes/Dipendente.php';
require_once 'classes/Dettagli.php';

$dipendente1 = new Dettagli('a', 'b', '1234567890123456','Gioppino', 1);

$dipendente1->setNome('Mario');
$dipendente1->setCognome('Vitalone');
$dipendente1->setCodiceFiscale('vtlmra65m25o908x');
$dipendente1->setRuolo('Spazzino');
$dipendente1->setOreLavorate(160);
$dipendente1->calcoloStipendio($dipendente1->oreLavorate);
var_dump($dipendente1);
