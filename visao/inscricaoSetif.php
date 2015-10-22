<div id="painelInscricaoSetif">
    
    
    <ul class="nav navbar-nav navbar-left" >
                <li><a href="#imgQuee2"><span style="color: teal; font-weight: bold;"><u>Sobre o Evento</u></span></a></li>
                <li><a href="#imgInscricao2"><span style="color: teal; font-weight: bold;"><u>Faça Sua Inscrição no Setif 2015</u></span></a></li>
                <li><a href="#imgLocalizacao2"><span style="color: teal; font-weight: bold;"><u>Localização do Setif 2015</u></span></a></li>
    </ul>
    <br />
    
    
    <!-- COMENTARIO -->
    <div class="jumbotron" style="background: white; " >

        <img id="imgQuee2" src="./resources/img/oquee2.png" style="max-height: 150px;" class="img-responsive"  />   
     
        <br />


                        <div class="jumbotron" style="background: white; border: 2px #0085C5 solid; " >
        
                            <div class="row">  
                                <div class="col-md-12 col-sm-12 col-xs-12">
<!--                                    <center>
                                        <img src="resources/img/setif.png" style="max-height: 300px;" class="img-responsive" />
                                    </center>
        -->
        
         <div id="newbaCorousel2" class="carousel slide" data-ride="carousel">
               
                        <ol class="carousel-indicators">
                            <li data-target="#newbaCorousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#newbaCorousel2" data-slide-to="1"></li>
                        </ol>   
                    
                        <div class="carousel-inner">
                            <div class="item active">
                                <center>
                                    <img style="max-height: 350px;"  src="./resources/img/slidesetif.png" alt="SETIF - Semana de Tecnologia da Informação" class="img-rounded img-responsive" />
                                </center>
                            </div>
                            <div class="item">
                                <center>
                                    <img style="max-height: 350px;"  src="./resources/img/slidesetif2.png" alt="I Semana de Tecnologia da Informação" class="img-rounded img-responsive" />
                                </center>
                            </div> 
                        </div>
                        
                        <a class="carousel-control left" href="#newbaCorousel2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right" href="#newbaCorousel2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
         </div>
        
        
                                    <br />
        
                                    <center>
                                        <h4 style="color: graytext;">Acho legal colocar alguma coisa relacionado à SETIF, para diferenciar as páginas de inscrições e também divulgar o evento!! O que acham de colocar a programação????</h4>  <br />
                                   </center>
                                    
                                    <hr />
                                    <h1>CONTINUAÇÃO</h1>
        
                                </div> 
                            </div>
                        </div>
        
        


                <img id="imgInscricao2" src="./resources/img/bannerinscricao.png" style="max-height: 150px;" class="img-responsive" />    
        <br />

        <div class="jumbotron" style="background: white; border: 2px #0085C5 solid;" >
            
            <h3 style="color: graytext;">
                Faça sua inscrição para o Setif 2015 - Paranavaí - Contamos com sua presença!
            </h3>
            <br />
            
            <div style="color: red; float: right;">
                <label>* Campos obrigatórios.</label>
            </div>
            <br />


                <form action="./visao/adicionarInscricao.php" method="POST" role="form" >
                    <input type="hidden" value="2" name="idEvento" id="idEvento" />
                    <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>" name="urlatual" id="urlatual" />



                    <div class="form-group">
                        <label  for="nome">*Nome:</label>
                        <input type="text" required="true" placeholder="Insira seu Nome" class="form-control" id="nome" name="nome" />
                    </div>

                    <div class="form-group">
                        <label  for="cpf">*CPF (Somente numeros):</label>
                        <input type="text" required="true" oninput="vCPF(this)" placeholder="Insira seu CPF" class="form-control" id="cpf" name="cpf" />
                    </div>

                    <div class="form-group">
                        <label  for="email">*E-mail:</label>
                        <input type="email" required="true" placeholder="Insira seu E-mail" class="form-control" id="email" name="email" />
                    </div>

                    <div class="form-group">
                        <label  for="ra">*Ra:</label>
                        <input type="text" required="true" placeholder="Insira seu RA" class="form-control" id="ra" name="ra" />
                    </div>

                    <div class="form-group">
                        <label  for="telefone1">*Telefone 1:</label>
                        <input type="text" required="true" placeholder="Insira seu Telefone" class="form-control" id="telefone1" name="telefone1" />
                    </div>


                    <div class="form-group">
                        <label for="curso">*Selecione um Curso:</label>
                        <select required="true" class="form-control" name="curso" id="curso">
                            <option value="Tecnologia em Análise e Desenvolvimento de Sistemas">Tecnologia em Análise e Desenvolvimento de Sistemas</option>
                            <option value="Técnico em Informática Integrado">Técnico em Informática Integrado</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="serie">*Selecione uma Série:</label>
                        <select required="true" class="form-control" name="serie" id="serie">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>                   
                    <div class="form-group" style="font-size: 15px;">
                        <label  for=txtCaptcha2">Não sou um robo:</label>
                        <input type="text" id="txtCaptcha2" class="form-control" style=" text-align:center; border:none; font-weight: bold; font-family:Modern" />
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
            
        </div>
 
        <br />
        
        <img id="imgLocalizacao2" src="resources/img/bannerlocalizacao.png" style="max-height: 150px;" class="img-responsive" />    
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