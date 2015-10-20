<?php

class Inscricao {

    function Inscricao() {
        
    }

    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $cidade;
    private $empresa;
    private $instituicaoOrganizacao;
    private $estudante;
    private $telefone1;
    private $telefone2;
    private $idEvento;
    private $curso;
    private $ra;
    private $serie;
    private $porcentagemPresenca;
    private $quantidadeHorasPresente;
    private $status;
    private $cursoPos;
    private $horarioPos;
    private $outrosPos;
    
    function getOutrosPos() {
        return $this->outrosPos;
    }

    function setOutrosPos($outrosPos) {
        $this->outrosPos = $outrosPos;
    }

        
    function getCursoPos() {
//        return "teste";
        return $this->cursoPos;
    }

    function getHorarioPos() {
//         return "teste";
        return $this->horarioPos;
    }

    function setCursoPos($cursoPos) {
        $this->cursoPos = $cursoPos;
    }

    function setHorarioPos($horarioPos) {
        $this->horarioPos = $horarioPos;
    }
        
    function getPorcentagemPresenca() {
        return $this->porcentagemPresenca;
    }

    function getQuantidadeHorasPresente() {
        return $this->quantidadeHorasPresente;
    }

    function setPorcentagemPresenca($porcentagemPresenca) {
        $this->porcentagemPresenca = $porcentagemPresenca;
    }

    function setQuantidadeHorasPresente($quantidadeHorasPresente) {
        $this->quantidadeHorasPresente = $quantidadeHorasPresente;
    }

        
    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }
    
    function getSerie() {
        return $this->serie;
    }

    function setSerie($serie) {
        $this->serie = $serie;
    }

    function getCurso() {
        return $this->curso;
    }

    function getRa() {
        return $this->ra;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setRa($ra) {
        $this->ra = $ra;
    }

    function getInstituicaoOrganizacao() {
        return $this->instituicaoOrganizacao;
    }

    function getEstudante() {
        return $this->estudante;
    }

    function setInstituicaoOrganizacao($instituicaoOrganizacao) {
        $this->instituicaoOrganizacao = $instituicaoOrganizacao;
    }

    function setEstudante($estudante) {
        $this->estudante = $estudante;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function getEscola() {
        return $this->escola;
    }

    function getTelefone1() {
        return $this->telefone1;
    }

    function getTelefone2() {
        return $this->telefone2;
    }

    function getIdEvento() {
        return $this->idEvento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setEscola($escola) {
        $this->escola = $escola;
    }

    function setTelefone1($telefone1) {
        $this->telefone1 = $telefone1;
    }

    function setTelefone2($telefone2) {
        $this->telefone2 = $telefone2;
    }

    function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }

}
