<div id="painelEmBreve">
    <!-- COMENTARIO -->
    <div class="jumbotron" style="background: white; " >


        <img src="./resources/img/bannerdeclaracao.png" style="max-height: 150px;" class="img-responsive" />    
        <br />

        <div class="jumbotron" style="background: white; border: 2px #0085C5 solid;" >
            
            <h3 style="color: graytext;">
                Emitir sua declarações de participação no(s) evento(s).
            </h3>
            <br />
            
            <div style="color: red; float: right;">
                <label>* campos obrigatórios.</label>
            </div>
            <br />

                <form action="./visao/emiteDeclaracao.php" method="POST" role="form" >
                    <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>" name="urlatual" id="urlatual" />


                    <div class="form-group">
                        <label  for="cpf">CPF (Somente numeros):</label>
                        <input type="text" required="true" oninput="vCPF(this)" placeholder="Insira seu CPF" class="form-control" id="cpf" name="cpf" />
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
                    <div class="form-group" style="font-size: 15px;">
                        <label  for=txtCaptcha3">Não sou um robo:</label>
                        <input type="text" disabled="true" id="txtCaptcha3" class="form-control" style=" text-align:center; border:none; font-weight: bold; font-family:Modern" />
                        <input type="button" id="btnrefresh" class="form-control" value="Atualizar" class="btn btn-default " onclick="DrawCaptcha();" />
                        <input type="text" style="width: 100%;" placeholder="Insira o numero acima"  oninput="check(this)" required  id="txtInput"/> 
                    </div>
                    <center>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success btn-lg" onclick="ValidCaptcha();">
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