<?php 
    ini_set('display_errors', 'on');

    require_once 'cliente/listaClientes.php';
    require_once 'cliente/cliente.php';

    //Cria a lista de Clientes a partir do array de Clientes
    foreach($listaClientes as $key => $cliente){
        $clientes[$key] = new Cliente();
        foreach($cliente as $atributo => $valor){
            $set = 'set'.ucfirst($atributo);
            $clientes[$key]->{$set}($valor);
        }
    }
    if(isset($_GET['order'])){
        if($_GET['order']=='desc'){
            krsort($clientes);
        }elseif($_GET['order']=='asc'){
            ksort($clientes);
        }
    }
    require_once 'pages/page.php';
