<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    class Funcionario extends Pessoa{
        protected string $cargo;
        protected float $salario;

        public function __construct(string $cpf,string $nome,string $telefone,string $cargo,float $salario,Endereco $endereco)
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->cargo = $cargo;
            $this->salario = $salario;
        }//Fim do construtor

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//Fim do get

        public function __set(string $nomeVariavel, string $dado):void 
        {
            $this->nomeVariavel = $dado;
        }//Fim do get

        public function imprimir():string
        {
            return parent::imprimir()."<br>Cargo: ".$this->cargo."<br>Salário: ".$this->salario;
        }//Fim do imprimir
    }//Fim da classe
?>