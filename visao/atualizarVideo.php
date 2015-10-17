<?php

include_once  '../dao/DaoModificacao.php';
include_once '../entidades/Modificacao.php';
include_once '../dao/DaoAdm.php';
include_once '../entidades/Adm.php';
include_once '../banco/Conexao.php';


      
try{
           
           if(isset($_POST["titulo"])){
               $eventoNovo->setDataEnvio($_POST["titulo"]);
           }
           
           if(isset($_POST["texto"])){
               $eventoNovo->setDataEnvio($_POST["texto"]);
           }
           
           if(isset($_POST["url"])){
               $eventoNovo->setDataEnvio($_POST["url"]);
           }
           
           if(isset($_POST["tipo"])){
               $eventoNovo->setQuantidadeHoras($_POST["tipo"]);
           }
      
       
       $daoModificacao->atualizar($eventoNovo->getId());
       
       echo "<script type='text/javascript'>";
    
            echo "alert('Video atualizado com sucesso!');";
            echo "location.href='http://localhost/newbatutoriais/adm/administrar.php';";

       echo "</script>";
       
       
       }
       catch (Exception $erro){
           
       print($erro);  
           
       echo "<script type='text/javascript'>";
    
            echo "alert('Erro ao tentar atualizar video!');";
            echo "location.href='http://localhost/newbatutoriais/adm/gerenciar.php';";

       echo "</script>";
           
       }
       


