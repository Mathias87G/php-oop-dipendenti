<?php
require_once 'Dipendente.php';
require_once __DIR__.'/../traits/Stipendio.php';

Class Dettagli extends Dipendente {
  private $ruolo;
  use Stipendio;

  public function __construct($_nome, $_cognome, $_codiceFiscale, $_ruolo){
    parent::__construct($_nome, $_cognome, $_codiceFiscale);
  }

  public function setRuolo($_ruolo){
    if(empty($_ruolo)){
      die('Non hai inserito il nome');
    } else {
      $this->ruolo = $_ruolo;
    }
  }

  public function getRuolo(){
    return $this->ruolo;
  }
}
