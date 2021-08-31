<?php
/**
 * Tela home da aplicação
 * @author Jackson Castilho
 * @since 24/08/2021
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Farmácia</title>
    </head>
    <body>
        <?php
//        require_once './View/class_view_cargo.php';
//        $oCargo = new ViewCargo();
//        $oCargo->montaTelaCargo();
//        
//        require_once './View/class_view_cidade.php';
//        $oCidade = new ViewCidade();
//        $oCidade->montaTelaCidade();

//        require_once './View/class_view_fornecedor.php';
//        $oFornecedor = new ViewFornecedor();
//        $oFornecedor->montaTelaFornecedor();
//        
        require_once './View/class_view_funcionario.php';
        $oFornecedor = new ViewFuncionario();
        $oFornecedor->montaTelaFuncionario();
        ?>
    </body>
</html>
