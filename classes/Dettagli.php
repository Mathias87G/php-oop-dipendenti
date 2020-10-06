<?php
require_once __DIR__.'/../traits/Stipendio.php';

Class Dettagli extends Dipendente {
  private $ruolo;
  use Stipendio;

  public function __construct($_nome, $_cognome, $_codiceFiscale, $_ruolo){
    parent::__construct($_nome, $_cognome, $_codiceFiscale);
  }

  public function setRuolo($_ruolo){
    if(empty($_ruolo)){
      throw new Exception('Non hai inserito il ruolo');
    } else {
      $this->ruolo = $_ruolo;
    }
  }

  public function getRuolo(){
    return $this->ruolo;
  }

  public function __toString(){
    return "nome: " . $this->nome . "<br> cognome:" . $this->cognome .
    "<br> codice fiscale:" . $this->codiceFiscale .
    "<br> ruolo: " . $this->ruolo . "<br> stipendio: " . $this->stipendio;
  }

}
