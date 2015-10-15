<div id="painelInscricaoAgile">
    <!-- COMENTARIO -->
    <div class="jumbotron" style="background: white; " >

        <!--        <div class="jumbotron" style="background: white; border: 2px #0085C5 solid; " >
        
                    <div class="row">  
                        <div class="col-md-12 col-sm-12 col-xs-12">
        
                            <p style="color: graytext;">Organizado pelas comunidades ágeis locais, é um evento sem fins lucrativos e tem como principal missão criar lideranças em metodologias ágeis no mundo.</p>
        
                            <p style="color: graytext;">Também tem por objetivo promover uma comunicação em massa, compartilhando visões e casos de sucesso, incentivando a adoção dessas técnicas por grupos e empresas.</p>
        
                            <p style="color: graytext;">O planejamento prevê sessões bastante práticas utilizando workshops com convidados e ignite talks submetidos pela comunidade.</p>
        
                        </div> 
                    </div>
                </div>-->
        
        <img src="./resources/img/bannerinscricao.png" style="max-height: 150px;" class="img-responsive" />    
        <br />

        <div class="jumbotron" style="background: white; border: 2px #0085C5 solid;" >
            
            <h4 style="color: graytext;">
                Faça sua inscrição para o Agile Tour 2015 - Paranavaí - Contamos com sua presença!
            </h4>
            <br />
            
            <div style="color: red; float: right;">
                <label>Todos os campos são obrigatórios.</label>
            </div>
            <br />
            
            
<!--        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Faça sua inscrição para o Agile Tour 2015 - Paranavaí - Contamos com sua presença</h3>
            </div>

            <div class="panel-body">-->
                
                <form action="./visao/adicionarInscricao.php" method="POST" role="form" >
                    <input type="hidden" value="1" name="idEvento" id="idEvento" />
                    <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>" name="urlatual" id="urlatual" />



                    <div class="form-group">
                        <label  for="nome">Nome:</label>
                        <input type="text" required="true" placeholder="Insira seu Nome" class="form-control" id="nome" name="nome" />
                    </div>

                    <div class="form-group">
                        <label  for="cpf">CPF:</label>
                        <input type="text" required="true" placeholder="Insira seu CPF" class="form-control" id="cpf" name="cpf" />
                    </div>

                    <div class="form-group">
                        <label  for="email">E-mail:</label>
                        <input type="email" required="true" placeholder="Insira seu E-mail" class="form-control" id="email" name="email" />
                    </div>

                    <div class="form-group">
                        <label  for="cidade">Cidade:</label>
                        <input type="text" required="true" placeholder="Insira sua Cidade" class="form-control" id="cidade" name="cidade" />
                    </div>

                    <div class="form-group">
                        <label  for="telefone1">Telefone 1:</label>
                        <input type="text" required="true" placeholder="Insira seu Telefone" class="form-control" id="telefone1" name="telefone1" />
                    </div>

                    <div class="form-group">
                        <label  for="telefone2">Telefone 2:</label>
                        <input type="text" placeholder="Insira seu Telefone" class="form-control" id="telefone2" name="telefone2" />
                    </div>      

                    <div class="form-group">
                        <label  for="estudante">Estudante:</label>
                        <div class="radio">
                            <label><input  type="radio" name="estudante" value="sim">Sim</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="estudante" value="não">Não</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  for=instituicaoOrganizacao">Instituição/Organização</label>
                        <input type="text" required="true" placeholder="Insira o Nome da Instituição e/ou Organização" class="form-control" id="instituicaoOrganizacao" name="instituicaoOrganizacao" />
                    </div>



                    <!--                    <div class="form-group">
                                            <label  for="estudante">Estudante:</label>
                                            <div class="radio">
                                                <label><input  type="radio" name="estudante" value="sim">Sim</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="estudante" value="não">Não</label>
                                            </div>
                                        </div>-->

                    <center>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success btn-lg">
                                <span class="glyphicon glyphicon-ok"></span>
                                Efetuar a Inscrição</button> 
                            <button type="reset" class="btn btn-danger btn-lg">
                                <span class="glyphicon glyphicon-remove"></span>
                                Limpar</button>                        
                        </div>
                    </center>
                </form>              
<!--            </div>
        </div>-->
            
            
        </div>
        
        
                <br />
                
                <img src="./resources/img/bannerlocalizacao.png" style="max-height: 150px;" class="img-responsive" />    
                <br />
                
                <div class="jumbotron" style="background: white; border: 2px #0085C5 solid;"  >
                
               
                    <h4 style="color: graytext;">
                       O evento acontecerá nas dependencias do IFPR.
                    </h4>
                    <br />
                
                <center>
                    
                    <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.160084763484!2d-52.45506965018148!3d-23.054591884862884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a3b9f85545%3A0xba25df5e12175a0b!2sInstituto+Federal+do+Paran%C3%A1!5e0!3m2!1spt-BR!2sus!4v1444614048225" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    
                </center>
                </div>
        
        
        

<!--        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Onde será o Agile Tour Paranavaí 2015??</h3>
            </div>
            <div class="panel-body">

                <center>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.160084763484!2d-52.45506965018148!3d-23.054591884862884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a3b9f85545%3A0xba25df5e12175a0b!2sInstituto+Federal+do+Paran%C3%A1!5e0!3m2!1spt-BR!2sus!4v1444614048225" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </center>

            </div>
        </div>-->


    </div>

</div>