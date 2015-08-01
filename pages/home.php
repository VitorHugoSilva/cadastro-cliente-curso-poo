<div class="row">
    <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Cadastro de Clientes</h1></div>

            <div class="panel-body">
                <table class="table table-responsive table-hover">
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-7">Cliente</th>
                        <th class="col-md-3">Cpf</th>
                        <th class="col-md-1">Comandos</th>
                    </tr>
                    <?php
                    $cont =1;
                    foreach($clientes as $key => $cliente):
                        ?>
                        <tr>
                            <td><?=$cont?></td>
                            <td><?=$cliente->getNome()?></td>
                            <td><?=$cliente->getCpf()?></td>
                            <td>
                                <a class="btn btn-default" href="index.php?page=cadastro&cadastro=<?=$key?>">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Detalhes
                                </a>
                            </td>
                        </tr>

                        <?php
                        $cont++;
                    endforeach;
                    ?>
                </table>
            </div>

        </div>

    </div>
</div>

