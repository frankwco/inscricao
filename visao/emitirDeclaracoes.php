<div id="painelEmBreve">
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


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Emitir sua declarações de participação no(s) evento(s)</h3>
            </div>

            <div class="panel-body">
                <form action="./visao/adicionarInscricao.php" method="POST" role="form" >
                    <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>" name="urlatual" id="urlatual" />


                    <div class="form-group">
                        <label  for="cpf">CPF:</label>
                        <input type="text" required="true" placeholder="Insira seu CPF" class="form-control" id="cpf" name="cpf" />
                    </div>

                    <div class="form-group">
                        <label  for="email">E-mail:</label>
                        <input type="email" required="true" placeholder="Insira seu E-mail" class="form-control" id="email" name="email" />
                    </div>

                    <div class="form-group">
                        <label for="serie">Evento:</label>
                        <select class="form-control" name="serie" id="serie">
                            <option value="1">Agile Tour</option>
                            <option value="2">Setif</option>
                        </select>
                    </div>


                    <center>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success btn-lg">
                                <span class="glyphicon glyphicon-ok"></span>
                                Emitir Declaração</button> 
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