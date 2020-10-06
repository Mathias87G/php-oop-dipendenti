<?php

class Dipendente {

  protected $nome;
  protected $cognome;
  protected $codiceFiscale;

  public function __construct($_nome, $_cognome, $_codiceFiscale){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->codiceFiscale = $_codiceFiscale;
  }

  public function setNome($_nome){
    if(empty($_nome)){
      throw new Exception('Non hai inserito il nome');
    } else if (is_numeric($_nome)){
      throw new Exception('Non è il figlio di Elon Musk');
    } else {
      $this->nome = $_nome;
    }
  }

  public function getNome(){
    return $this->nome;
  }

  public function setCognome($_cognome){
    if (empty($_cognome)){
      throw new Exception('Non hai inserito il cognome');
    } else if (is_numeric($_cognome)){
      throw new Exception('Non è il figlio di Elon Musk');
    } else {
      $this->cognome = $_cognome;
    }
  }

  public function getCognome(){
    return $this->cognome;
  }

  public function setCodiceFiscale($_codiceFiscale){
    if (empty($_codiceFiscale)){
      throw new Exception('Non hai inserito il codice fiscale');
    } else if (strlen($_codiceFiscale) != 16){
      throw new Exception('Il codice fiscale deve essere costituito da 16 caratteri');
    } else {
      $this->codiceFiscale = $_codiceFiscale;
    }
  }

  public function getCodiceFiscale(){
    return $this->codiceFiscale;
  }



}
