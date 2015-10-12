<div id="painelInscricaoSetif">
    <!-- COMENTARIO -->
    <div class="jumbotron" style="background: white; " >

<!--                        <div class="jumbotron" style="background: white; border: 2px #0085C5 solid; " >
        
                            <div class="row">  
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <center>
                                        <img src="resources/img/newba.jpg" style="max-height: 300px;" class="img-responsive" />
                                    </center>
        
                                    <br />
        
                                    <center>
                                        <h3 style="color: graytext;">Tem dúvida sobre algo? Não perca tempo, nos mande ou deixe sua sugestão!</h3>  <br />
                                        <a href="#" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-envelope"></span> Enviar</a>
                                    </center>
        
                                </div> 
                            </div>
                        </div>-->
                        <div class="jumbotron" style="background: white; border: 2px #0085C5 solid; " >
        
                            <div class="row">  
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <center>
                                        <img src="resources/img/setif.png" style="max-height: 300px;" class="img-responsive" />
                                    </center>
        
                                    <br />
        
                                    <center>
                                        <h3 style="color: graytext;">Acho legal colocar alguma coisa relacionado à SETIF, para diferenciar as páginas de inscrições e também divulgar o evento!! O que acham de colocar a programação????</h3>  <br />
                                   </center>
        
                                </div> 
                            </div>
                        </div>
        
        

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Faça sua inscrição para o Setif 2015 - IFPR Paranavaí</h3>
            </div>

            <div class="panel-body">
                <form action="./visao/adicionarInscricao.php" method="POST" role="form" >
                    <input type="hidden" value="2" name="idEvento" id="idEvento" />
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
                        <label  for="ra">Ra:</label>
                        <input type="text" required="true" placeholder="Insira seu RA" class="form-control" id="ra" name="ra" />
                    </div>

                    <div class="form-group">
                        <label  for="telefone1">Telefone 1:</label>
                        <input type="text" required="true" placeholder="Insira seu Telefone" class="form-control" id="telefone1" name="telefone1" />
                    </div>
<!--
                    <div class="form-group">
                        <label  for=instituicaoOrganizacao">Instituição/Organização</label>
                        <input type="text" required="true" placeholder="Insira o Nome da Instituição e/ou Organização" class="form-control" id="instituicaoOrganizacao" name="instituicaoOrganizacao" />
                    </div>-->

                    <div class="form-group">
                        <label for="curso">Selecione um Curso:</label>
                        <select class="form-control" name="curso" id="curso">
                            <option value="Tecnologia em Análise e Desenvolvimento de Sistemas">Tecnologia em Análise e Desenvolvimento de Sistemas</option>
                            <option value="Técnico em Informática Integrado">Técnico em Informática Integrado</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="serie">Selecione uma Série:</label>
                        <select class="form-control" name="serie" id="serie">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
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
            </div>


        </div>


    </div>

</div>