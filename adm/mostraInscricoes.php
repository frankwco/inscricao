<?php
require '../template/topoadm.php';

include_once '../dao/DaoInscricao.php';
include_once '../entidades/Inscricao.php';
include_once '../banco/Conexao.php';

$daoEventos = new DaoInscricao();
$listaEventos = $daoEventos->buscarTodos();
?>


<!-- Pagina do conteudo -->
<div class="row" style="margin-top: 1%; margin-bottom: 1%;">
    <div class="col-md-2 col-sm-2 col-xs-2"></div>
    <div class="col-md-8 col-sm-8 col-xs-8" >
            
        <h2 style="color: graytext;">
            Inscrições Realizadas:
        </h2>
        <hr/>

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
                            foreach ($listaEventos as $evento) {
                                echo '<tr>';
                                echo '<td>';
                                echo $evento->getNome();
                                echo '</td>';
                                echo '<td>';
                                echo $evento->getEmail();
                                echo '</td>';
                                echo '<td>';
                                echo $evento->getCurso();
                                echo '</td>';
                                echo '<td>';
                                echo $evento->getPorcentagemPresenca().'% - '.$evento->getQuantidadeHorasPresente().'h';
                                echo '</td>';
                               
                                echo '<td>';
                                echo "Colocar o Evento";
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

