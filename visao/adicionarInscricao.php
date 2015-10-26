<?php

require_once '../dao/DaoInscricao.php';
require_once '../entidades/Inscricao.php';
include_once '../banco/Conexao.php';
echo "<meta charset='UTF-8'/>";

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

//        if($inscricao->getIdEvento()==1){
//            $tipoEvento="Inscrição Agile Tour";
//        }
//        if($inscricao->getIdEvento()==2){
//            $tipoEvento="Inscrição SETIF";
//        }
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
    $listaEmail = $daoInscricao->buscarPorEmail($_POST["email"], $_POST["idEvento"]);
    $listaCpf = $daoInscricao->buscarPorCpf($_POST["cpf"], $_POST["idEvento"]);

    //Busca todas as inscrições
    $listaEventosRealizados = $daoInscricao->buscarPorIdEvento($_POST["idEvento"]);
    $quantidadeVagas = 1;
    if ($_POST["idEvento"] == 1) {
        $quantidadeVagas = 150;
    }
    if ($_POST["idEvento"] == 2) {
        $quantidadeVagas = 150;
    }

    if ($quantidadeVagas > count($listaEventosRealizados)) {

        if (validaCPF($_POST["cpf"])) {

            if (count($listaEmail) > 0) {

                echo "<script type='text/javascript'>";

                echo "alert('Já existe um usuário com esse email!  " . count($listaEmail) . "');";
                echo "location.href='" . $url . "';";

                echo "</script>";
            } else if (count($listaCpf) > 0) {

                echo "<script type='text/javascript'>";

                echo "alert('Já existe um usuário com esse cpf!');";
                echo "location.href='" . $url . "';";

                echo "</script>";
            } else {

                $daoInscricao->inserir($inscricao);

                echo "<script type='text/javascript'>";

                echo "alert('" . $inscricao->getNome() . ", Inscrição Realizada com Sucesso!!');";


                echo "location.href='" . $url . "';";

                echo "</script>";
            }
        } else {
            echo "<script type='text/javascript'>";

            echo "alert('CPF Inválido, faça sua inscrição novamente!');";
            echo "location.href='" . $url . "';";

            echo "</script>";
        }
    } else {
        echo "<script type='text/javascript'>";

        echo "alert('Não possui vagas, aguarde liberação. Avise-nos pelo seguinte email: andre.zavan@ifpr.edu.br');";
        echo "location.href='" . $url . "';";

        echo "</script>";
    }
} catch (PDOException $erro) {

    // print($erro);

    echo "<script type='text/javascript'>";

    echo "alert('Erro ao Efetuar a Inscrição!');";
    echo "location.href='" . $url . "';";

    echo "</script>";
}

function validaCPF($cpf = null) {

    // Verifica se um número foi informado
    if (empty($cpf)) {
        return false;
    }

    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
        return false;
        // Calcula os digitos verificadores para verificar se o
        // CPF é válido
    } else {

        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
    }
}
