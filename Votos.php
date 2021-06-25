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
    
    public function __construct($secao=null, $zona=null,$urna=null,$cand1=null,$cand2=null,$cand3=null,$cand4=null,$cand5=null,$branco=null,$nulo=null) {

        $this->Secao = $secao;
        $this->Zona = $zona;
        $this->Urna = $urna;
        $this->Candidato1 = $cand1;
        $this->Candidato2 = $cand2;
        $this->Candidato3 = $cand3;
        $this->Candidato4 = $cand4;
        $this->Candidato5 = $cand5;
        $this->Branco = $branco;
        $this->Nulo = $nulo;
    }
}
?>