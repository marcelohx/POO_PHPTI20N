<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8">
        <title>Página Excluir</title>
    </head>
    <body>
        <form method="POST">
        <label>Código: </label>
        <input type="number" name="codigo" id="codigo"/><br><br>

        <button type="submit">Excluir
            <?php
                $conexao = new Conexao();
                $codigo = $_POST['codigo'];
                $excluir = new Excluir();
                
            ?>
        </button>
        </form>
        <?php
            $excluir->excluirPessoa($conexao, $codigo);
        ?>
        <br><br>
        <a href="Menu.php"><button>Voltar</button><br><br>
    </body>
</html>