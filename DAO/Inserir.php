<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        function cadastrarPessoa(Conexao $conexao, int $codigo, string $nome, string $endereco,string $telefone){
            try{
                $conn = $conexao->conectar();//Abrindo conexao com o banco
                $sql = "Insert into pessoa(codigo, nome, endereco, telefone)
                       values('$codigo','$nome','$endereco','$telefone')";
                $result = mysqli_query($conn, $sql);//Commit no banco
                //Fechar a conexao com o banco
                mysqli_close($conn);
                //Resposta da inserção
                if($result){
                    return "<br>Inserido com Sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro)
            {
                return "<br>Algo deu Errado!<br><br>".$erro;
            }//Fim do catch
        }//Fim do metodo
    }//Fim da classe
?>