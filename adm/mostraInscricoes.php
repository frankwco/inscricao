<?php
require '../template/topoadm.php';

include_once '../dao/DaoAdm.php';
include_once '../dao/DaoModificacao.php';
include_once '../dao/DaoInscricao.php';
include_once '../entidades/Adm.php';
include_once '../entidades/Modificacao.php';
include_once '../entidades/Inscricao.php';
include_once '../banco/Conexao.php';

$daoUsuario = new DaoAdm();
$daoModificacao = new DaoModificacao();
$daoInscricoes = new DaoInscricao();

$listaUsuarios = $daoUsuario->buscarTodos();

$listaVideos = $daoModificacao->buscarTodos();

$listaInscricoes = $daoInscricoes->buscarTodos();
?>


<script type="text/javascript">
    $(document).ready(function () {

//    $("#tabelaAdm").hide();
//    $("#tabelaVideo").show();
//
//    
//    $("#btnAdministradores").click(function (){
//       $("#tabelaAdm").toggle();
//       $("#tabelaVideo").hide();
//    });
//    
//    $("#btnVideo").click(function (){
//       $("#tabelaAdm").hide();
//       $("#tabelaVideo").toggle();
//    });





    });
</script>

<!-- Pagina do conteudo -->
<div class="row" style="margin-top: 1%; margin-bottom: 1%;">
    <div class="col-md-2 col-sm-2 col-xs-2"></div>
    <div class="col-md-8 col-sm-8 col-xs-8" >




        <div id="tabelaVideo">    
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Inscrições Realizadas</h3>
                </div>
                <div class="panel-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Curso</th>
                                <th>% Presença - Nº Horas</th>
                                <th>Evento</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaInscricoes as $insc) {
                                echo '<tr>';
                                echo '<td>';
                                echo $insc->getNome();
                                echo '</td>';
                                echo '<td>';
                                echo $insc->getEmail();
                                echo '</td>';
                                echo '<td>';
                                echo $insc->getCurso();
                                echo '</td>';
                                echo '<td>';
                                echo $insc->getPorcentagemPresenca().'% - '.$insc->getQuantidadeHorasPresente().'h';
                                echo '</td>';
                               
                                echo '<td>';
                                echo "Colocar o Evento";
                                echo '</td>';

                                echo '<td>';
                                echo "<div class='btn-group'>";
                                echo '<a href="#?id=' . $insc->getId() . '" class="btn btn-info btn-sm"  >';
                                echo '<span class="glyphicon glyphicon-search"></span>';
                                echo '</a>';
                                echo "</div>";
                                echo '</td>';
                                
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>




        <!-- Modal de visualiziação  -->
        <!--<div id="modalVisualizar" class="modal fade" role="dialog">
          <div class="modal-dialog">
        
             Modal corpo
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Nome:</b><?php echo "Nome" ?></h4>
              </div>
              <div class="modal-body">
                  <div class="jumbotron" style=" background: white;">
                  <fieldset>
                      <legend>Dados</legend>
        
                        <label><b>Email:</b></label>
                        <label style="color: graytext;"><?php echo "Email" ?></label><br />
                        <label><b>Telefone:</b></label>
                        <label style="color: graytext;"> <?php echo "Telefone" ?></label><br />
                      
                  </fieldset>
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        
          </div>
        </div>-->

        <!-- LINK PARA VOLTAR -->        
        <a href="principal.php" title="Voltar para a pagina incial" class="btn btn-sm btn-info" style="
           bottom: 20px !important;
           position: fixed;
           left:30px;" >Voltar</a>

    </div>
</div>  
<div class="col-md-2 col-sm-2 col-xs-2"></div>
</div>  

<?php require '../template/rodape.php'; ?>

