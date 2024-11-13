<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página de Consulta</title>
    </head>
    <body>
        <form method="POST">
            <label>Código: </label>
            <input type="number" name="codigo" id="codigo"><br><br>

            <button type="submit">
                Consultar
            <?php
                //conexao com o banco
                $conexao = new Conexao();
                //Coletar o codigo
                $codigo = $_POST['codigo'];
                //chamar o consultar
                $consultar = new Consultar();
                $consultar->consultarIndividual($conexao,$codigo);
            ?>
            </button>
        </form>
        <br><br>
        <a href="Menu.php"><button>Voltar</button><br><br>
    </body>
</html>