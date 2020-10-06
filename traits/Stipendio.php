<?php


trait Stipendio
{
  public $oreLavorate;
  protected $pagaOraria = 25;
  protected $stipendio;

  public function __construct($_nome, $_cognome, $_codiceFiscale, $_ruolo, $_oreLavorate){
    parent::__construct($_nome, $_cognome, $_codiceFiscale, $_ruolo);
    $this->oreLavorate = $_oreLavorate;
  }

  public function setOreLavorate($_oreLavorate){
    if (empty($_oreLavorate)){
      throw new Exception('Non hai inserito nessun numero');
    } else if (!is_numeric($_oreLavorate)){
      throw new Exception('Le ore mensili devono essere un numero');
    } else {
      $this->oreLavorate = $_oreLavorate;
    }
  }

  public function getOreLavorate(){
    return $this->oreLavorate = $_oreLavorate;
  }

  public function calcoloStipendio($_oreLavorate){
    $this->stipendio = $this->pagaOraria * $this->oreLavorate;
    return $this->stipendio;
  }


}
