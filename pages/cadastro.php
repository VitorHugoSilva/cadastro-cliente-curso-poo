<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Detalhes</h2></div>
            <div class="panel-body">
                <?php
                    if(isset($_GET['cadastro'])){
                        if(@count($clientes[$_GET['cadastro']]) > 0) {


                            ?>

                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th class="col-md-2">Nome:</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getNome()?></td>
                                </tr>
                                <tr>
                                    <th>Cpf:</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getCpf()?></td>
                                </tr>
                                <tr>
                                    <th>Data de Nascimento</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getDataNasc()?></td>
                                </tr>
                                <tr>
                                    <th>Telefone</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getTelefone()?></td>
                                </tr>
                                <tr>
                                    <th>Endereco</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getEndereco()?></td>
                                </tr>
                                <tr>
                                    <th>Cep</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getCep()?></td>
                                </tr>
                                <tr>
                                    <th>Bairro</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getBairro()?></td>
                                </tr>
                                <tr>
                                    <th>Cidade</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getCidade()?></td>
                                </tr>
                                <tr>
                                    <th>Uf</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getUf()?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?=$clientes[$_GET['cadastro']]->getEmail()?></td>
                                </tr>
                            </table>
                            <?php
                        }else{
                            echo "<h1>Cliente não encontrado</h1>";
                        }

                }else{
                        echo "<h1>Erro ao listar os detalhes</h1>";
                    }
                ?>
            </div>
            <div class="panel-footer"><a class="btn btn-default" href="index.php">Voltar</a></div>
        </div>
    </div>
</div>

