<div class="row">
    <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Cadastro de Clientes</h1></div>

            <div class="panel-body">
                <?php
                    if(isset($_GET['order']))
                    {
                        $order = ($_GET['order']=='asc')? 'desc': 'asc';
                        $class = ($order=='desc')? 'glyphicon glyphicon-arrow-down' : 'glyphicon glyphicon-arrow-up';
                ?>
                        <a href="index.php?order=<?=$order?>" class="btn btn-default"> <i class="<?=$class?>"></i> Ordernar</a>
                <?php
                    }else{
                ?>
                        <a href="index.php?order=desc" class="btn btn-default"> <i class="glyphicon glyphicon-arrow-down"></i> Ordernar</a>
                <?php
                    }
                ?>
                <br>   <br>
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
                            <td><?=$key?></td>
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

