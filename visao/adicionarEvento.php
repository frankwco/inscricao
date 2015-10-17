<?php

include_once  '../dao/DaoEvento.php';
include_once '../entidades/Evento.php';
include_once '../banco/Conexao.php';


  
  

try{
  
        $url = "";
        
        $eventoNovo = new Evento();
        $daoEvento = new DaoEvento();
        
        if(isset($_POST['urlatual'])){
            $url = $_POST['urlatual'];
        }else{
            $url = "http://localhost/newbatutoriais/adm/principal.php";
        }
        
           
           if(isset($_POST["data"])){
               $eventoNovo->setDataEnvio($_POST["data"]);
           }
           
           if(isset($_POST["descricao"])){
               $eventoNovo->setDescricao($_POST["descricao"]);
           }
           
           if(isset($_POST["vagas"])){
               $eventoNovo->setLimiteVagas($_POST["vagas"]);
           }
           
           if(isset($_POST["horas"])){
               $eventoNovo->setQuantidadeHoras($_POST["horas"]);
           }
           
           if(isset($_POST["status"])){
               $eventoNovo->setStatus($_POST["status"]);
           }
        
      
         
      $daoEvento->inserir($eventoNovo);
       
               
       echo "<script type='text/javascript'>";
    
            echo "alert('Evento adicionado com sucesso!');";
            echo "location.href='".$url."';";

       echo "</script>";
       
       
       }
       catch (Exception $erro){
           
       print($erro);  
           
       echo "<script type='text/javascript'>";
    
            echo "alert('Erro ao tentar adicionar evento!');";
            echo "location.href='".$url."';";

       echo "</script>";
           
       }

       




