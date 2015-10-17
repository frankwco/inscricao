<?php
require '../template/topoadm.php';

include_once '../dao/DaoEvento.php';
include_once '../entidades/Evento.php';
include_once '../banco/Conexao.php';

$daoEventos = new DaoEvento();
$listaEventos = $daoEventos->buscarTodos();
?>


<!-- Pagina do conteudo -->
<div class="row" style="margin-top: 1%; margin-bottom: 1%;">
    <div class="col-md-2 col-sm-2 col-xs-2"></div>
    <div class="col-md-8 col-sm-8 col-xs-8" >
            
        <h2 style="color: graytext;">
            Eventos Realizados:
        </h2>
        <hr/>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Data</th>
                                <th>Limite de Vagas</th>
                                <th>Q° de Horas</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaEventos as $evento) {
                                echo '<tr>';
                                echo '<td>';
                                echo $evento->getDescricao();
                                echo '</td>';
                                echo '<td>';
                                echo $evento->getDataEnvio();
                                echo '</td>';
                                echo '<td>';
                                echo $evento->getLimiteVagas();
                                echo '</td>';
                                echo '<td>';
                                echo $evento->getQuantidadeHoras().'h';
                                echo '</td>';
                               
                                echo '<td>';
                                echo $evento->getStatus();
                                echo '</td>';

                                echo '<td>';
                                echo "<div class='btn-group'>";
                                echo '<a href="#?id=' . $evento->getId() . '" class="btn btn-info btn-sm"  >';
                                echo '<span class="glyphicon glyphicon-search"></span>';
                                echo '</a>';
                                echo "</div>";
                                echo '</td>';
                                
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>

    


        <!-- LINK PARA VOLTAR -->        
        <a href="principal.php" title="Voltar para a pagina incial" class="btn btn-sm btn-info" style="
           bottom: 20px !important;
           position: fixed;
           left:30px;" >Voltar</a>

    </div>
    <div class="col-md-2 col-sm-2 col-xs-2"></div>
</div>  

<?php require '../template/rodape.php'; ?>

