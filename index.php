    
<?php require './template/topo.php'; ?>



<script type="text/javascript">
    $(document).ready(function () {

        $("#painelEmBreve").hide();
        $("#painelInscricaoSetif").hide();
        $("#painelInscricaoAgile").hide();
        $("#painelVideoBemVindo").show();

        $("#btnPainelEmBreve").click(function () {
            $("#painelEmBreve").show();
            $("#painelInscricaoSetif").hide();
            $("#painelInscricaoAgile").hide();
            $("#painelVideoBemVindo").hide();
        });

        $("#btnPainelLancametos").click(function () {
            $("#painelEmBreve").hide();
            $("#painelInscricaoSetif").show();
            $("#painelInscricaoAgile").hide();
            $("#painelVideoBemVindo").hide();
        });


        $("#btnPainelTopVideos").click(function () {
            $("#painelEmBreve").hide();
            $("#painelInscricaoSetif").hide();
            $("#painelInscricaoAgile").show();
            $("#painelVideoBemVindo").hide();
        });

        $("#btnPainelVideoBemVindo").click(function () {
            $("#painelEmBreve").hide();
            $("#painelInscricaoSetif").hide();
            $("#painelInscricaoAgile").hide();
            $("#painelVideoBemVindo").show();
        });

    });
</script>



<div class="row">  
    <div class="col-md-12 col-sm-12 col-xs-12">
        <center>

            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button id="btnPainelVideoBemVindo" type="button" class="btn btn-primary btn-lg">Agile Tour</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="btnPainelLancametos" class="btn btn-info btn-lg">SETIF</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="btnPainelEmBreve" class="btn btn-danger btn-lg">Declaração de Participação</button>
                </div>
            </div>

        </center>            
    </div>
</div>



<!-- Pagina do conteudo -->
<div class="row" style="margin-top: 1%; margin-bottom: 3%;">
    <div class="col-md-1 col-sm-1 col-xs-1"></div>
    <div class="col-md-10 col-sm-10 col-xs-10">


        <div id="painelVideoBemVindo">            
            <!-- COMENTARIO -->            

            <ul class="nav navbar-nav navbar-left" >
                <li><a href="#imgQuee"><span style="color: teal; font-weight: bold;"><u>Sobre o Evento</u></span></a></li>
                <li><a href="#imgInscricao"><span style="color: teal; font-weight: bold;"><u>Faça Sua Inscrição no Agile Tour 2015</u></span></a></li>
                <li><a href="#imgLocalizacao"><span style="color: teal; font-weight: bold;"><u>Localização do Agile Tour 2015</u></span></a></li>
            </ul>


            <div class="jumbotron" style="background: white; " >


                <div class="jumbotron" style="background: white;" >   
                    <center>
                        <img src="resources/img/data.png" style="max-height: 300px;" class="img-responsive" />      
                    </center>

                    <br />
                    <center>
                        <h1 style="color: dodgerblue">Contagem regressiva:</h1>
                    </center>
                    <br />
                    <div id="countdown"></div>
                    <br />
                    <!--               
                                                <center>
                                                    <img src="resources/img/agileeufui.png" style="max-height: 400px;" class="img-responsive" /> 
                                                </center>
                    -->
                </div> 

                <!-- JavaScript includes -->
                <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
                <script src="assets/countdown/jquery.countdown.js"></script>
                <script src="assets/js/script.js"></script>



                <img id="imgQuee" src="resources/img/oquee2.png" style="max-height: 150px;" class="img-responsive" />    
                <br />

                <!--border: 2px #0085C5 solid; -->
                <div class="jumbotron" style="background: white; border: 2px #0085C5 solid;"  >

                    <div class="row">  
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div id="newbaCorousel" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li data-target="#newbaCorousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#newbaCorousel" data-slide-to="1"></li>
                                </ol>   

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img height="350" src="./resources/img/agiletourn.png" alt="Agile Tour 2015 - Paranavaí" class="img-rounded img-responsive" />

                                    </div>
                                    <div class="item">
                                        <img height="350" src="./resources/img/banneragile2.png" alt="Agile Tour 2015 - Paranavaí" class="img-rounded img-responsive" />

                                    </div>
                                </div>

                                <a class="carousel-control left" href="#newbaCorousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="carousel-control right" href="#newbaCorousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                            <br />
                            <hr />

                            <center>
                                <h1 style="color: dodgerblue">Empresa</h1>
                            </center>
                            <br />

                            <h3 style="color: graytext; text-align: justify;">
                                Paranavái-PR, receberá pela primeira vez a edição 2015 do Agile Tour. 
                                O evento é organizado pelas comunidades ágeis locais, é um evento sem fins
                                lucatrivos e tem como principal missão criar lideranças em metodologias ágeis no mundo,
                                Também tem por objetivo promover uma comunicação em massa, compartilhando visões e casos de sucesso,
                                icentivando a adoção dessas técinicas por grupo e empresas.
                                Confiram em breve nossa agenda!
                            </h3>


                            <hr />
<!--                            <center>
                                <h1 style="color: dodgerblue; ">Programação</h1>
                            </center>
                            <br />
                            <h3 style="color: graytext; ">Confira abaixo a nossa programação.</h3>
                            
                            <br />
                            <table class="table table-striped" style="color: graytext;">
                            <tr>
                                <th style="color: dodgerblue">HORA</th>
                                <th style="color: dodgerblue">TEMA</th>
                                <th style="color: dodgerblue">PALESTRANTE</th>
                           </tr>
                           <tr>
                                <th>8:00</th>
                                <th>CREDENCIAMENTO/coffee break</th>
                                <th></th>
                           </tr>
                           <tr>
                                <th>9:00</th>
                                <th>TEMA</th>
                                <th>Juliano Ribeiro</th>
                           </tr>
                           <tr>
                                <th>10:00</th>
                                <th>TEMA</th>
                                <th>X</th>
                           </tr>
                           <tr>
                                <th>11:00</th>
                                <th>TEMA</th>
                                <th>X</th>
                           </tr>
                           <tr>
                                <th>14:00</th>
                                <th>CODEGENERATION COM MAVEN</th>
                                <th>Munif Gebara</th>
                           </tr>
                           <tr>
                                <th>15:00</th>
                                <th>COMO IMPLANTAR METODOLOGIAS ÁGEIS NA SUA EMPRESA SEM SER DEMITIDO</th>
                                <th>Anderson Paradelas</th>
                           </tr>
                           <tr>
                                <th>16:30</th>
                                <th>GAMIFICATION E O LADO NEGRO DESSA FORÇA</th>
                                <th>Marcelo Walter</th>
                           </tr>
                           <tr>
                                <th>17:30</th>
                                <th>MARSHMALLOW WARS</th>
                                <th>Marcelo Walter</th>
                           </tr>
                           <tr>
                                <th>18:30</th>
                                <th>ENCERRAMENTO</th>
                                <th></th>
                           </tr>
                   
                        </table>  
                        <br />
                        
                         <table class="table table-striped" style="color: graytext;">
                            <tr>
                                <th style="color: dodgerblue">HORA</th>
                                <th style="color: dodgerblue">TEMA</th>
                                <th style="color: dodgerblue">PALESTRANTE</th>
                           </tr>
                           <tr>
                                <th>0:00</th>
                                <th>Jira Orientado a SCRUM</th>
                                <th>Réryka Rúbia</th>
                           </tr>
                           <tr>
                                <th>0:00</th>
                                <th>TEMA</th>
                                <th>Juliano Ribeiro</th>
                           </tr>
                           <tr>
                                <th>0:00</th>
                                <th>TEMA</th>
                                <th>X</th>
                           </tr>
                           <tr>
                                <th>0:00</th>
                                <th>TEMA</th>
                                <th>X</th>
                           </tr>                                      
                        </table>  -->
<!--                            <hr />-->
                            <center>
                                <h1 style="color: dodgerblue; ">Patrocinadores</h1>
                            </center>
                            <br />
                            <h3 style="color: graytext;">Confira nossos patrocinadores.</h3>
                            <br />
                            <center>
                                <div style="float: left;">
                                <img src="resources/img/upcode.png" style="max-height: 64px;" class="img-responsive" /> 
                                </div>
                                <div style="float: left; width: 30px; height: 10px;"></div>
                                <div style="float: left;">
                                <img src="resources/img/objetive.png" style="max-height: 64px;" class="img-responsive" /> 
                                </div>
                            </center>
                            
                        </div> 
                    </div>
                </div>

                <br />


                <img id="imgInscricao" src="./resources/img/bannerinscricao.png" style="max-height: 150px;" class="img-responsive" />    
                <br />

                <div class="jumbotron" style="background: white; border: 2px #0085C5 solid;" >

                    <h3 style="color: graytext;">
                        Faça sua inscrição para o Agile Tour 2015 - Paranavaí - Contamos com sua presença!
                    </h3>
                    <br />

                    <div style="color: red; float: right;">
                        <label>* Campos obrigatórios.</label>
                    </div>
                    <br />

                    <form action="visao/adicionarInscricao.php" method="POST" role="form" >
                        <input type="hidden" value="1" name="idEvento" id="idEvento" />
                        <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>" name="urlatual" id="urlatual" />



                        <div class="form-group">
                            <label  for="nome">*Nome:</label>
                            <input type="text" required="true" placeholder="Insira seu Nome" class="form-control" id="nome" name="nome" />
                        </div>

                        <div class="form-group">
                            <label  for="cpf">*CPF (Somente numeros):</label>
                            <input type="text" required="true"  oninput="vCPF(this)" placeholder="Insira seu CPF" class="form-control" id="cpf" name="cpf" />

                        </div>

                        <div class="form-group">
                            <label  for="email">*E-mail:</label>
                            <input type="email" required="true" placeholder="Insira seu E-mail" class="form-control" id="email" name="email" />
                        </div>

                        <div class="form-group">
                            <label  for="cidade">*Cidade:</label>
                            <input type="text" required="true" placeholder="Insira sua Cidade" class="form-control" id="cidade" name="cidade" />
                        </div>

                        <div class="form-group">
                            <label  for="telefone1">*Telefone 1:</label>
                            <input type="text" required="true" placeholder="Insira seu Telefone" class="form-control" id="telefone1" name="telefone1" />
                        </div>

                        <div class="form-group">
                            <label  for="telefone2">Telefone 2:</label>
                            <input type="text" placeholder="Insira seu Telefone" class="form-control" id="telefone2" name="telefone2" />
                        </div>      

                        <div class="form-group">
                            <label  for="estudante">*Estudante:</label>
                            <div class="radio">
                                <label><input  type="radio" name="estudante" value="sim">Sim</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="estudante" value="não">Não</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  for=instituicaoOrganizacao">*Instituição/Organização</label>
                            <input type="text" required="true" placeholder="Insira o Nome da Instituição e/ou Organização" class="form-control" id="instituicaoOrganizacao" name="instituicaoOrganizacao" />
                        </div>

                        <div class="form-group">
                            <label  for=instituicaoOrganizacao" style="color: red;">Pesquisa de Opinião</label>
                            <label  for=instituicaoOrganizacao">*Ajude-nos a propor uma Pós Graduação Lato Sensu (Especialização) no IFPR Campus Paranavaí. No caso de uma possível oferta, escolha duas áreas que venham de encontro com o seu interesse:</label>
                            <div class="radio">
                                <label><input required="true"  type="radio" name="cursoPos" value="Programação Web/Programação para Dispositivos Móveis">Programação Web/Programação para Dispositivos Móveis</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="cursoPos" value="Programação Web/Engenharia de Software">Programação Web/Engenharia de Software</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="cursoPos" value="Programação para Dispositivos Móveis/Engenharia de Software">Programação para Dispositivos Móveis/Engenharia de Software</label>
                            </div>

                            <label  for=outraAreaInteresse">Outras Áreas de Interesse:</label>
                            <input type="text" placeholder="Insira Outras Áreas de Seu Interesse" class="form-control" id="outraAreaInteresse" name="outraAreaInteresse" />
                            <br/>

                            <label  for=instituicaoOrganizacao">*A oferta seria oportuna em qual horário?</label>
                            <div class="radio">
                                <label><input required="true"  type="radio" name="horarioPos" value="Somente aos sábados">Somente aos sábados</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="horarioPos" value="Sexta-feira a noite e aos sábados">Sexta-feira a noite e aos sábados</label>
                            </div>

                            <input type="text" required="true" placeholder="Insira o Nome da Instituição e/ou Organização" class="form-control" id="instituicaoOrganizacao" name="instituicaoOrganizacao" />



                        </div>




                        <div class="form-group" style="font-size: 15px;">
                            <label  for=txtCaptcha">Não sou um robo:</label>
                            <input type="text" disabled="true" id="txtCaptcha" class="form-control" style="background-image:url(images/cap.JPG); text-align:center; border:none; font-weight: bold; font-family:Modern" />
                            <input type="button" id="btnrefresh" class="form-control" value="Atualizar" class="btn btn-default " onclick="DrawCaptcha();" />
                            <input type="text" style="width: 100%;" placeholder="Insira o numero acima"  oninput="check(this)" required  id="txtInput"/> 
                        </div>


                        <center>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success btn-lg" onclick="ValidCaptcha();">
                                    <span class="glyphicon glyphicon-ok"></span>
                                    Efetuar a Inscrição</button> 
                                <button type="reset" class="btn btn-danger btn-lg">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    Limpar</button>                        
                            </div>
                        </center>
                    </form>   


                    <script>
                        // Validate the Entered input aganist the generated security code function
                        function check(input) {
                            var cap = removeSpaces(document.getElementById('txtCaptcha').value);
                            if (input.value != cap) {
                                input.setCustomValidity("Error in code Please Check!");
                            } else {
                                // input is fine -- reset the error message
                                input.setCustomValidity('');
                            }
                        }
                    </script>

                </div>

                <br />

                <img id="imgLocalizacao" src="resources/img/bannerlocalizacao.png" style="max-height: 150px;" class="img-responsive" />    
                <br />

                <div class="jumbotron" style="background: white; border: 2px #0085C5 solid;"  >


                    <h3 style="color: graytext;">
                        O evento acontecerá nas dependencias do IFPR.
                    </h3>
                    <br />

                    <center>

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.160084763484!2d-52.45506965018148!3d-23.054591884862884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a3b9f85545%3A0xba25df5e12175a0b!2sInstituto+Federal+do+Paran%C3%A1!5e0!3m2!1spt-BR!2sus!4v1444614048225" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </center>
                </div>

            </div>

        </div>



        <!--Inscrição para o AGILE TOUR-->
        <?php require './visao/inscricaoAgile.php'; ?>

        <!--Inscricao para a SETIF-->
        <?php require './visao/inscricaoSetif.php'; ?>


        <!--Emitir Declarações-->
        <?php require './visao/emitirDeclaracoes.php'; ?>


    </div>
    <div class="col-sm-2  col-md-1 col-xs-1"></div>
</div>  

<?php require './template/rodape.php'; ?>

