<?php

class DaoInscricao {

    private $pdo;

    function DaoInscricao() {

        $this->pdo = new Conexao();
        $this->pdo = $this->pdo->getPdo();
    }

    public function getNextID() {
        try {

            $sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tabinscricao'";
            $result = $this->pdo->query($sql);
            $final_result = $result->fetch(PDO::FETCH_ASSOC);
            return $final_result['Auto_increment'];
        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function inserir(Inscricao $modi) {
        try {


            $sql = "INSERT INTO tabinscricao ("
                    . "cidade,"
                    . "cpf,"
                    . "email,"
                    . "instituicaoOrganizacao,"
                    . "nome,"
                    . "telefone1,"
                    . "telefone2,"
                    . "idEvento,"
                    . "curso,"
                    . "serie,"
                    . "cursoPos,"
                    . "horarioPos,"
                    . "outrosPos,"
                    . "ra,"
                    . "estudante"
                    . ") VALUES ("
                    . ":cidade,"
                    . ":cpf,"
                    . ":email,"
                    . ":instituicaoOrganizacao,"
                    . ":nome,"
                    . ":telefone1,"
                    . ":telefone2,"
                    . ":idEvento,"
                    . ":curso,"
                    . ":serie,"
                    . ":cursoPos,"
                    . ":horarioPos,"
                    . ":outrosPos,"
                    . ":ra,"
                    . ":estudante)";

            $p_sql = $this->pdo->prepare($sql);

            $p_sql->bindValue(":cidade", $modi->getCidade());
            $p_sql->bindValue(":cpf", $modi->getCpf());
            $p_sql->bindValue(":email", $modi->getEmail());
            $p_sql->bindValue(":instituicaoOrganizacao", $modi->getInstituicaoOrganizacao());
            $p_sql->bindValue(":nome", $modi->getNome());
            $p_sql->bindValue(":telefone1", $modi->getTelefone1());
            $p_sql->bindValue(":telefone2", $modi->getTelefone2());
            $p_sql->bindValue(":idEvento", $modi->getIdEvento());
            $p_sql->bindValue(":estudante", $modi->getEstudante());
            $p_sql->bindValue(":curso", $modi->getCurso());
            $p_sql->bindValue(":cursoPos", $modi->getCursoPos());
            $p_sql->bindValue(":horarioPos", $modi->getHorarioPos());
            $p_sql->bindValue(":outrosPos", $modi->getOutrosPos());
            $p_sql->bindValue(":serie", $modi->getSerie());
            $p_sql->bindValue(":ra", $modi->getRa());



            return $p_sql->execute();
        } catch (PDOException $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde. " . $e;
        }
    }

    public function atualizar(Evento $modi) {
        try {
            $sql = "UPDATE modificacao SET titulo = :titulo, texto = :texto, video = :video, tipo = :tipo WHERE id = :id";
            $p_sql = $this->pdo->prepare($sql);
            $p_sql->bindValue(":titulo", $modi->getDataEnvio());
            $p_sql->bindValue(":texto", $modi->getDescricao());
            $p_sql->bindValue(":video", $modi->getLimiteVagas());
            $p_sql->bindValue(":tipo", $modi->getQuantidadeHoras());
            $p_sql->bindValue(":id", $modi->getId());
            return $p_sql->execute();
        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function deletar($id) {

        try {

            $sql = "DELETE FROM tabinscricao WHERE idInscricao = :id";
            $p_sql = $this->pdo->prepare($sql);
            $p_sql->bindValue(":id", $id);

            return $p_sql->execute();
        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function buscarPorId($id) {

        try {

            $sql = "SELECT * FROM tabinscricao WHERE idInscricao = :id";
            $p_sql = $this->pdo->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();

            return $this->populaModificacao($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function buscarPorEmail($email, $idEvento) {

        try {

            $sql = "SELECT * FROM tabinscricao WHERE email = :email and idEvento = :idEvento";
            $p_sql = $this->pdo->prepare($sql);
            $p_sql->bindValue(":email", $email);
            $p_sql->bindValue(":idEvento", $idEvento);
            $p_sql->execute();

            $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();

            foreach ($lista as $l) {
                $f_lista[] = $this->populaModificacao($l);
            }

            return $f_lista;



//            return $this->populaModificacao($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function buscarPorCpf($cpf, $idEvento) {

        try {

            $sql = "SELECT * FROM tabinscricao WHERE cpf = :cpf and idEvento = :idEvento";
            $p_sql = $this->pdo->prepare($sql);
            $p_sql->bindValue(":cpf", $cpf);
            $p_sql->bindValue(":idEvento", $idEvento);
            $p_sql->execute();

            $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();

            foreach ($lista as $l) {
                $f_lista[] = $this->populaModificacao($l);
            }

            return $f_lista;
        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

//    public function buscarPorCpf($cpf) {
//
//        try {
//
//            $sql = "SELECT * FROM tabinscricao WHERE cpf = :cpf";
//            $p_sql = $this->pdo->prepare($sql);
//            $p_sql->bindValue(":cpf", $cpf);
//            $p_sql->execute();
//            $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
//            $f_lista = array();
//
//            foreach ($lista as $l) {
//                $f_lista[] = $this->populaModificacao($l);
//            }
//
//
//            return $f_lista;
//        } catch (Exception $e) {
//
//            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
//        }
//    }


    public function buscarTodos() {

        try {

            $sql = "SELECT * FROM tabinscricao ORDER BY idInscricao";
            $result = $this->pdo->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();

            foreach ($lista as $l) {
                $f_lista[] = $this->populaModificacao($l);
            }

            return $f_lista;
        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    private function populaModificacao($row) {

        $modi = new Inscricao();
        $modi->setId($row['idInscricao']);
        $modi->setCidade($row['cidade']);
        $modi->setCpf($row['cpf']);
        $modi->setEmail($row['email']);
        $modi->setInstituicaoOrganizacao($row['instituicaoOrganizacao']);
        $modi->setNome($row['nome']);
        $modi->setTelefone1($row['telefone1']);
        $modi->setTelefone2($row['telefone2']);
        $modi->setIdEvento($row['idEvento']);
        $modi->setCurso($row['curso']);
        $modi->setSerie($row['serie']);
        $modi->setRa($row['ra']);
        $modi->setCursoPos($row['cursoPos']);
        $modi->setHorarioPos($row['horarioPos']);
        $modi->setOutrosPos($row['outrosPos']);
        $modi->setEstudante($row['estudante']);

        return $modi;
    }

}
