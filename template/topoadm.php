<html >
    <head>
        <title>Questionário de Egressos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../resources/css/base.css" type="text/css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


        <?php
        // esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php. 
        session_start();

        if ((!isset($_SESSION['email']) == true) and ( !isset($_SESSION['senha']) == true)) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location:http://localhost/newbatutoriais/index.php');
        }

        $logado = $_SESSION['nome'];
        $idAdm = $_SESSION['id'];
        ?>




    </head>
    <body >
        <div class="container-fluid" >

            <!-- Pagina do menubar -->
            <div class="row" >
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBarUser">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                </button>
                                <a class="navbar-brand" style="color: teal;" href="#"><img  src="../resources/img/at.png" alt="Newba Tutoriais e Dicas" class="img-resposive" /></a>
                            </div>
                            <div class="collapse navbar-collapse" id="navBarUser">

                                <ul class="nav navbar-nav navbar-right" >
                                    <li><a href="#"><span class="label" style="color: black;"><?php echo "Seja Bem vindo $logado"; ?></span></a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-share" data-toggle="modal"  data-target="#modalUsuario" style="color: teal;">Usuário</span></a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-share" data-toggle="modal"  data-target="#modalEvento" style="color: teal;">Evento</span></a></li>
                                    <li><a href="../visao/logout.php"><span class="glyphicon glyphicon-log-out" style="color: teal;">Sair</span></a></li>            
                                </ul>
                            </div>


                            <!-- Modal -->
                            <div id="modalEvento" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Evento</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div style="float: right;">
                                                <label style="color: red;">Todos os campos são obrigatórios</label>
                                            </div>
                                            <br />

                                            <form action="../visao/adicionarEvento.php" method="POST" role="form" >

                                                        <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>" name="urlatual" id="urlatual" />
         

                                                        <div class="form-group">
                                                            <label  for="data">Data:</label>
                                                            <input type="date" required="true" placeholder="Insere a data" class="form-control" id="data" name="data" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="descricao">Descrição:</label>
                                                            <textarea  required="true" rows="3" class="form-control" id="descricao" name="descricao" ></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="vagas">Limite de Vagas:</label>
                                                            <input type="number" required="true" placeholder="Insere o limite de vagas" class="form-control" id="vagas" name="vagas" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="horas">Quantidade de Horas:</label>
                                                            <input type="number" required="true" placeholder="Insere a quantidade de horas" class="form-control" id="horas" name="horas" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label  for="status">Status:</label>
                                                            <div class="radio">
                                                                <label><input  type="radio" name="status" value="ativo">Ativo</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="status" value="inativo">Inativo</label>
                                                            </div>
                                                        </div>
                                                        <center>
                                                            <div class="btn-group">
                                                                <button type="submit" class="btn btn-success btn-lg">
                                                                    <span class="glyphicon glyphicon-ok"></span>
                                                                    Adicionar</button> 
                                                                <button type="reset" class="btn btn-danger btn-lg">
                                                                    <span class="glyphicon glyphicon-remove"></span>
                                                                    Limpar</button>                        
                                                            </div>
                                                        </center>
                                                    </form>              
                                             
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </nav>       
                </div>
            </div>  


