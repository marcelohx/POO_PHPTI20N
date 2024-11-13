<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8">
        <title>Página Atualizar</title>
    </head>
    <body>
        <form method="POST">
            <label>Código: </label>
            <input type="number" name="codigo" id="codigo"/><br><br>

            <select name="atualizacao">
                <option value="nome">Nome</option>
                <option value="telefone">Telefone</option>
                <option value="endereco">Endereço</option>
            </select><br><br>

            <label>Novo Dado: </label>
            <input type="text" name="novoDado" id="novoDado"/><br><br>

            <button type="submit"> Atualizar
                <?php
                $conexao = new Conexao();
                $atualizar = new Atualizar();
                $codigo = $_POST['codigo'];
                $campo = $_POST['atualizacao'];
                $novoDado = $_POST['novoDado'];

                
                ?>
            </button>
        </form>
        <?php
            echo $atualizar->atualizarPessoa($conexao,$campo,$novoDado,$codigo);
        ?>
        <br><br>
        <a href="Menu.php"><button>Voltar</button><br><br>
    </body>
</html>