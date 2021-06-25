<?php 

class Votos{
    public $Secao;
    public $Zona;
    public $Urna;
    public $Candidato1;
    public $Candidato2;
    public $Candidato3;
    public $Candidato4;
    public $Candidato5;
    public $Nulo;
    public $Branco;
    public function __construct($secao, $zona,$urna,$cand1) {

        $this->Secao = $name;
        $this->Zona = $Zona;
        $this->Urna = $urna;
        $this->Candidato1 = $cand1;
    }
}
?>