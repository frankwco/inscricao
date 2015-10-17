<?php


class DaoEvento{
    
    private $pdo;
            
    function  DaoEvento(){
        
        $this->pdo = new Conexao();
        $this->pdo = $this->pdo->getPdo();
        
    }
    
    
    public function getNextID(){
        try{
            
            $sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tabevento'";
            $result = $this->pdo->query($sql);
            $final_result = $result->fetch(PDO::FETCH_ASSOC); 
            return $final_result['Auto_increment'];
         
        }  catch (Exception $e){
           
         print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
       
        }
    }


    public function inserir(Evento $modi){
        try{
            
            
            
            $sql = "INSERT INTO tabevento ("
                    . "dataEvento,"
                    . "descricao,"
                    . "limiteVagas,"
                    . "quantidadeHoras,"
                    . "status"
                    . ") VALUES ("
                    . ":dataEvento,"
                    . ":descricao,"
                    . ":limiteVagas,"
                    . ":quantidadeHoras,"
                    . ":status)";
            
            $p_sql = $this->pdo->prepare($sql);
            
            $p_sql -> bindValue(":dataEvento", $modi->getDataEnvio());
            $p_sql -> bindValue(":descricao", $modi->getDescricao());
            $p_sql -> bindValue(":limiteVagas", $modi->getLimiteVagas());
            $p_sql -> bindValue(":quantidadeHoras", $modi->getQuantidadeHoras());
            $p_sql -> bindValue(":status", $modi->getStatus());
          
   
            
            return $p_sql->execute();
         
            
        }  
        catch (Exception $e){
            
         print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde. " .$e; 

        }
        
    }
    
    public function atualizar(Evento $modi) { 
        try { 
            $sql = "UPDATE tabvento SET dataEvento = :dataEvento, descricao = :descricao, limiteVagas = :limitevagas, quantidadeHoras = :quantidadeHoras, status = :status WHERE idEvento = :idEvento"; 
            $p_sql = $this->pdo->prepare($sql); 
            $p_sql -> bindValue(":dataEvento", $modi->getDataEnvio());
            $p_sql -> bindValue(":descricao", $modi->getDescricao());
            $p_sql -> bindValue(":limiteVagas", $modi->getLimiteVagas());
            $p_sql -> bindValue(":quantidadeHoras", $modi->getQuantidadeHoras());
            $p_sql -> bindValue(":status", $modi->getStatus());
            $p_sql->bindValue(":idEvento", $modi->getId()); 
            return $p_sql->execute(); 
            
        } catch (Exception $e) { 
            
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
            
        } 
        
        }


  
    
    public function deletar($id){
        
        try{
            
            $sql = "DELETE FROM tabevento WHERE idEvento = :idEvento";
            $p_sql  = $this->pdo->prepare($sql);
            $p_sql -> bindValue(":idEvento", $id);
            
            return $p_sql->execute();
     
        }
        catch (Exception $e){
     
     print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
     
     
 }
        
    }
    

    
     public function buscarPorId($id){
        
           try{
            
            $sql = "SELECT * FROM tabevento WHERE idEvento = :idEvento";
            $p_sql = $this->pdo->prepare($sql);
            $p_sql -> bindValue(":idEvento", $id);
            $p_sql->execute();
            
             return $this->populaEvento($p_sql->fetch(PDO::FETCH_ASSOC));
           
              }       
        catch (Exception $e){
     
     print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
     
     
 }
    
     }  
     
      public function buscarPorTitulo($titulo){
        
           try{
            
            $sql = "SELECT * FROM tabevento WHERE descricao = :descricao";
            $p_sql = $this->pdo->prepare($sql);
            $p_sql -> bindValue(":descricao", $titulo);
            $p_sql->execute();
            
             return $this->populaEvento($p_sql->fetch(PDO::FETCH_ASSOC));
           
              }       
        catch (Exception $e){
     
     print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
     
     
 }
    
     } 
     
  
     
    
    public function buscarTodos(){
        
           try{
            
            $sql = "SELECT * FROM tabevento ORDER BY idEvento";
            $result = $this->pdo->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            
            foreach ($lista as $l){
                $f_lista[] = $this->populaEvento($l);
            }
           
            return $f_lista;
              }       
        catch (Exception $e){
     
     print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
         
 }
        
    }
    
    private function populaEvento($row){
        
        $modi = new Evento();
        $modi ->setId($row['idEvento']);
        $modi ->setDataEnvio($row['dataEvento']);
        $modi ->setDescricao($row['descricao']);
        $modi ->setLimiteVagas($row['limiteVagas']);
        $modi ->setQuantidadeHoras($row['quantidadeHoras']);       
        $modi ->setStatus($row['status']);

        
        return $modi;
    }
    
    
}
