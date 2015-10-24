<?php

require_once '../dao/DaoInscricao.php';
 require_once '../entidades/Inscricao.php';
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

    if (isset($_POST["cursoPos"])) {
        $inscricao->setCursoPos($_POST["cursoPos"]);
    }

    if (isset($_POST["horarioPos"])) {
        $inscricao->setHorarioPos($_POST["horarioPos"]);
    }
    
    if (isset($_POST["outraAreaInteresse"])) {
        $inscricao->setOutrosPos($_POST["outraAreaInteresse"]);
    }
    
    //VERIFICAR CPF E EMAIL 
    $listaEmail = $daoInscricao->buscarPorEmail($_POST["email"]);
    $listaCpf = $daoInscricao->buscarPorCpf($_POST["cpf"]);
    

    
    if(count($listaEmail) > 0){
        
    echo "<script type='text/javascript'>";

    echo "alert('Já existe um usuário com esse email!  ".count($listaEmail)."');";
    echo "location.href='" . $url . "';";

    echo "</script>";
        
    }
    else if(count($listaCpf) > 0){
        
    echo "<script type='text/javascript'>";

    echo "alert('Já existe um usuário com esse cpf!');";
    echo "location.href='" . $url . "';";

    echo "</script>";
        
    }
    else{

        $daoInscricao->inserir($inscricao);
        
        echo "<script type='text/javascript'>";

        echo "alert('". $inscricao->getNome() . ", Inscrição Realizada com Sucesso!!');";


        echo "location.href='" . $url . "';";

        echo "</script>";
    }
        
    
    
} 
catch (PDOException $erro) 
{

    // print($erro);

    echo "<script type='text/javascript'>";

    echo "alert('Erro ao Efetuar a Inscrição!');";
    echo "location.href='" . $url . "';";

    echo "</script>";
}

       




