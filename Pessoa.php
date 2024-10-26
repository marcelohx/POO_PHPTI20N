<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');
    use PHP\Modelo\Endereco;

    class Pessoa{
        protected string $cpf; //Protected usando quando trabalha com herança
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        Public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco)
        {
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//Fim do metodo

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//Fim do metodo

        public function __set(string $nomeVariavel, string $dado):void
        {
            $this->nomeVariavel = $dado;
        }//Fim do metodo
        
        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone;
        }//Fim do metodo
    }//Fim da classe
?>