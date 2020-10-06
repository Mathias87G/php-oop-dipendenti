<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungete 1 trait a piacere -->
<?php
require_once 'classes/Dipendente.php';
require_once 'classes/Dettagli.php';

$dipendente1 = new Dettagli('a', 'b', '1234567890123456','Gioppino', 1);

try {
  $dipendente1->setNome('Mario');
} catch (Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

try {
  $dipendente1->setCognome('Vitalone');
} catch (Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

try {
  $dipendente1->setCodiceFiscale('vt1mra65m25o908x');
} catch (Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

try {
  $dipendente1->setRuolo('Operaio');
} catch (Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

try {
  $dipendente1->setOreLavorate(50);
} catch (Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

$dipendente1->calcoloStipendio($dipendente1->oreLavorate);

echo $dipendente1;
var_dump($dipendente1);
