<?php
 
class Evento{
    
    function Evento(){}
    
    private $id;
    private $dataEvento;
    private $descricao;
    private $limiteVagas;
    private $quantidadeHoras;
    private $status;

    
    public function getId() { return $this->id; } 
    public function setId($id) { $this->id = $id; }
    
    public function getDataEnvio() { return $this->dataEvento; } 
    public function setDataEnvio($dataEnvio) { $this->dataEvento = $dataEnvio; }
    
    public function getDescricao() { return $this->descricao; } 
    public function setDescricao($descricao) { $this->descricao = $descricao; }
    
    public function getLimiteVagas() { return $this->limiteVagas; } 
    public function setLimiteVagas($vagas) { $this->limiteVagas = $vagas; }
    
    public function getQuantidadeHoras(){ return $this->quantidadeHoras; } 
    public function setQuantidadeHoras($horas) { $this->quantidadeHoras = $horas; }
    
    public function getStatus(){ return $this->status; } 
    public function setStatus($status) { $this->status = $status; }
 
   

}

