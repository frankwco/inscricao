<html >
    <head>
        <title>Inscrições Para Eventos - IFPR Paranvaí</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../resources/css/base.css" type="text/css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <!-- VALIDADOR DE CPF -->
        <script src="./resources/js/cpf.js"></script>
        <script>
        function vCPF(i){
          i.setCustomValidity(validaCPF(i.value)?'':'CPF inválido!')
        }
        </script>
        
        <!-- CONTADOR -->
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="./assets/css/styles.css" />
        <link rel="stylesheet" href="./assets/countdown/jquery.countdown.css" />
        
        <!-- CAPTCHA -->
        <script type="text/javascript">
        //Created / Generates the captcha function
         function DrawCaptcha()
          {
          var a = Math.ceil(Math.random() * 6)+ '';
          var b = Math.ceil(Math.random() * 6)+ '';
          var c = Math.ceil(Math.random() * 6)+ '';
          var d = Math.ceil(Math.random() * 6)+ '';
          var e = Math.ceil(Math.random() * 6)+ '';
          var f = Math.ceil(Math.random() * 6)+ '';
          var g = Math.ceil(Math.random() * 6)+ '';
          var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f ;
          document.getElementById("txtCaptcha").value = code
          document.getElementById("txtCaptcha2").value = code
          document.getElementById("txtCaptcha3").value = code
          }
        </script>
         <script type="text/javascript">
        // Remove the spaces from the entered and generated code
         function removeSpaces(string){
          return string.split(' ').join('');
         }
        </script>

        
    </head>
    <body onload="DrawCaptcha();" >
        <div class="container-fluid " style="background-image: url(./resources/img/fundao.png); min-height: 100%; background-repeat: repeat;">

            <!-- Pagina do menubar -->
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBarUser">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                </button>
                                <!--<a class="navbar-brand" style="color: teal;" href="index.php"><img  src="./resources/img/at.png" alt="Agile Tour" class="img-responsive" /></a>-->
                            </div>
                            <div class="collapse navbar-collapse" id="navBarUser">
                                <ul class="nav navbar-nav navbar-right" >
<!--                               <!--<li><a href="#"><span class="glyphicon glyphicon-share" data-toggle="modal"  data-target="#modalLogin" style="color: teal;">Entrar</span></a></li>-->
                                </ul>
                            </div>


                            <!-- Modal -->
                            <div id="modalLogin" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Entrar</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Login</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <form action="./visao/login.php" method="POST" role="form" >
                                                        <div class="form-group">
                                                            <label  for="email">Seu email:</label>
                                                            <input type="email" required="true" placeholder="Insere o seu email" class="form-control" id="email" name="email" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Sua senha:</label>
                                                            <input type="password" required="true" placeholder="Insere sua senha" class="form-control" id="senha" name="senha" />
                                                        </div>
                                                        <center>
                                                            <div class="btn-group">
                                                                <button type="submit" class="btn btn-success btn-lg">
                                                                    <span class="glyphicon glyphicon-ok"></span>
                                                                    Logar</button> 
                                                                <button type="reset" class="btn btn-danger btn-lg">
                                                                    <span class="glyphicon glyphicon-remove"></span>
                                                                    Limpar</button>                        
                                                            </div>
                                                        </center>
                                                    </form>              
                                                </div>
                                            </div>
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

<!--            <div class="row" style="margin-top: 1%; margin-bottom: 1%;">
                
                <div class="col-md-1 col-sm-1 col-xs-1"></div>     

                <div class="col-md-10 col-sm-10 col-xs-10">      
                    <div id="newbaCorousel" class="carousel slide" data-ride="carousel">
               
                        <ol class="carousel-indicators">
                            <li data-target="#newbaCorousel" data-slide-to="0" class="active"></li>
                            <li data-target="#newbaCorousel" data-slide-to="1"></li>
                            <li data-target="#newbaCorousel" data-slide-to="2"></li>
                        </ol>   
                    
                        <div class="carousel-inner">
                            <div class="item active">
                                <img height="350" src="./resources/img/agiletourn.png" alt="Agile Tour 2015 - Paranavaí" class="img-rounded img-responsive" />

                            </div>
                            <div class="item">
                                <img height="350" src="./resources/img/agiletourn.png" alt="Semana da Informática 2015 - IFPR Paranavaí" class="img-rounded img-responsive" />

                            </div>
                            <div class="item">
                                <img src="./resources/img/header3.png" alt="Newba Tutoriais e Dicas" class="img-rounded img-responsive" />

                            </div>
                        </div>
                        
                        <a class="carousel-control left" href="#newbaCorousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right" href="#newbaCorousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-1 col-sm-1 col-xs-1"></div>   
                
            </div>-->

