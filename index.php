
<?php require './template/topo.php'; ?>


<!-- CARREGAMENTO DA PAGINA -->
<?php
//
//include_once  './dao/DaoModificacao.php';
//include_once './entidades/Modificacao.php';
//include_once './banco/Conexao.php';
//
//$daoModificacao = new DaoModificacao();
//
//$carregamento = $daoModificacao->buscarTodos();
//
//$listaTopPrimeiraColuna = array();
//$listaTopSegundaColuna = array();
//
//$listaLancamentosPrimeiraColuna = array();
//$listaLancamentosSegundaColuna = array();
//$listaLancamentosTerceiraColuna = array();
//
// 
//$controleVisitados = 0;
//$controleLancamentos = 0;
//
////preenchimentos das litas
//foreach ($carregamento as $carregar){
//    
//    if($carregar->getTipo()==="topvisitados"){
//      
//        if($controleVisitados === 0){
//           $listaTopPrimeiraColuna[]= $carregar; 
//           $controleVisitados++;
//        }
//        else if($controleVisitados === 1){
//            $listaTopSegundaColuna[] = $carregar;
//            $controleVisitados = 0;
//        }
//        
//        
//       $listaTop[] = $carregar; 
//    }
//    else if($carregar->getTipo() === "lancamentos"){
//        
//        if($controleLancamentos === 0){
//           $listaLancamentosPrimeiraColuna[] = $carregar; 
//           $controleLancamentos = 1;
//        }
//        else if($controleLancamentos === 1){
//            $listaLancamentosSegundaColuna[] = $carregar;
//            $controleLancamentos = 2;
//        }
//        else if($controleLancamentos === 2){
//            $listaLancamentosTerceiraColuna[] = $carregar;
//            $controleLancamentos = 0;
//        }
//    }
//    
//}
//
////converter a url para a embed
//function retornarEmbed($url){
//    $urlEmbed = str_replace("watch?v=", "embed/", $url);
//    $urlEmbed = str_replace("&feature=youtu.be", "", $urlEmbed);
//   return $urlEmbed; 
//}
//
?>
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
                    <button id="btnPainelVideoBemVindo" type="button" class="btn btn-primary btn-lg">Home</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="btnPainelTopVideos" class="btn btn-success btn-lg">Inscrição Agile Tour</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="btnPainelLancametos" class="btn btn-info btn-lg">Inscrições Setif</button>
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

        <center>

        </center>

        <div id="painelVideoBemVindo">
            <!-- COMENTARIO -->
            <div class="jumbotron" style="background: white; " >

                <div class="jumbotron" style="background: white; border: 2px #0085C5 solid; " >

                    <div class="row">  
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <center>
                                <img src="resources/img/interrogacao.png" style="max-height: 300px;" class="img-responsive" />
                            </center>

                            <br />

                            <center>
                                <h3 style="color: graytext;">Colocar alguma coisa aqui sobre o Agile!! Pode ser a programação, o que acham??</h3>  <br />
                            </center>

                        </div> 
                    </div>
                </div>

                <div class="panel panel-primary">
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

