<?php

include_once '../dao/DaoInscricao.php';
include_once '../entidades/Inscricao.php';
include_once '../banco/Conexao.php';




try {


    $url = "";

    $daoInscricao = new DaoInscricao();


    $inscricao = new Inscricao();




    if (isset($_POST['urlatual'])) {
        $url = $_POST['urlatual'];
    } else {
        $url = "http://localhost/inscricao/index.php";
    }

    if (isset($_POST["idEvento"])) {
        
        $inscricao->setIdEvento($_POST["idEvento"]);
    }

    if (isset($_POST["nome"])) {
        $inscricao->setNome($_POST["nome"]);
    }

    if (isset($_POST["cpf"])) {
        $inscricao->setCpf($_POST["cpf"]);
    }

    if (isset($_POST["email"])) {
        $inscricao->setEmail($_POST["email"]);
    }

    if (isset($_POST["cidade"])) {
        $inscricao->setCidade($_POST["cidade"]);
    }

    if (isset($_POST["telefone1"])) {
        $inscricao->setTelefone1($_POST["telefone1"]);
    }

    if (isset($_POST["telefone2"])) {
        $inscricao->setTelefone2($_POST["telefone2"]);
    }

    if (isset($_POST["estudante"])) {
        $inscricao->setEstudante($_POST["estudante"]);
    }

    if (isset($_POST["instituicaoOrganizacao"])) {
        $inscricao->setInstituicaoOrganizacao($_POST["instituicaoOrganizacao"]);
    }
    
    
    if (isset($_POST["curso"])) {
        $inscricao->setCurso($_POST["curso"]);
    }
    
    if (isset($_POST["ra"])) {
        $inscricao->setRa($_POST["ra"]);
    }
  
    if (isset($_POST["serie"])) {
        $inscricao->setSerie($_POST["serie"]);
    }





    $daoInscricao->inserir($inscricao);


    echo "<script type='text/javascript'>";

    echo "alert('Inscrição Efetuada com Sucesso!".$inscricao->getId().$inscricao->getNome()."');";
    
    
    echo "location.href='" . $url . "';";

    echo "</script>";
} catch (Exception $erro) {

    // print($erro);

    echo "<script type='text/javascript'>";

    echo "alert('Erro ao Efetuar a Inscrição!');";
    echo "location.href='" . $url . "';";

    echo "</script>";
}

       




