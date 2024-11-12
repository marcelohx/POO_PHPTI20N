<?php
    namespace PHP\Modelo;//Define o local do projeto
    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');
    use PHP\Modelo\Cliente;//Definir a classe que quer utilizar(quando tem muitas classe dentro do arquivo) | Boa pratica fazer sempre
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;
    /*

    $endCliente = new Endereco("Avenida Senador Vergueiro","400","Centro","São Bernardo do Campo","São Paulo","Brasil","03756-080");

    $cliente = new Cliente("1234","Marcelo","119999999",$endCliente,560.60);//Criar um objeto
    $clienteDois = new Cliente("9874","Xavier","1177777777",$endCliente,1020.60);//Criar um objeto
    $funcionario = new Funcionario("6542","Henrique","1166666666","Suporte",5110.56,$endCliente);

    echo $cliente->imprimir();
    echo $endCliente->imprimir()."<br>";

    echo $clienteDois->imprimir();
    echo $endCliente->imprimir()."<br>";

    echo $funcionario->imprimir();
    echo $endCliente->imprimir();
    */
    $conn = new Conexao();
    $conn->conectar();//Acessar o banco de dados

    //$inserir = new Inserir();//Acesso a classe Inserir
    //echo $inserir->cadastrarPessoa($conn,"2","Henrique","Rua","119");

    $consultar = new Consultar();
    echo $consultar->consultarIndividual($conn,'1');
    echo $consultar->consultarIndividual($conn,'2');

    $atualizar = new Atualizar();
    echo $atualizar-> atualizarPessoa($conn, "nome", "Marcelo",1);

    $excluir = new Excluir();
    $excluir->excluirPessoa($conn,1);
?>