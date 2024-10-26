<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    class Cliente extends Pessoa{
        protected float $precoTotal;

        public function __construct(string $cpf,string $nome,string $telefone,Endereco $endereco,float $precoTotal)
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->precoTotal = $precoTotal;
        }//Fim do construtor

        //Metodo Gets e Set
        public function __get(string $nome):mixed
        { //Get consulta/mostra o dado
            return $this->nome;
        }//Fim do metodo get

        public function __set(string $nomeVariavel, string $novoDado):void
        { //Set altera o dado
            $this->nomeVariavel = $novoDado;
        }//Fim do metodo Set

        public function imprimir():string
        {
            return parent::imprimir()."<br>Preço Total: ".$this->precoTotal;
        }//Fim do metodo imprimir
    }//Fim da classe
?>