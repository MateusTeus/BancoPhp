<?php 

    class ContaBancaria{
        private int $NumeroConta;
        private string $NomeTitular;
        protected float $Saldo = 0;
        
        public function get_nome() {
            return $this->NumeroConta;
            }
       public function get_NomeTitular() {
            return $this->NomeTitular;
            }
        public function get_Saldo() {
            return $this->Saldo;
            }
    

        public function __construct($NumeroConta,$NomeTitular){

            $this->NumeroConta = $NumeroConta;
            $this->NomeTitular = $NomeTitular;
        }

     
        public function sacar($valor){
            if($valor < 0){
                echo "O valor para saque não pode ser negativo";
            }else if($valor > $this->Saldo){
                echo "Você não tem este valor na sua conta";
            }else{
                echo "$valor . sacado com sucesso";
                $this->Saldo = $this->Saldo-$valor;
            }
        }

        public function depositar($valor){
            if($valor < 0){
                echo "Não é possível depositar valores negativos";
            }else{
                echo " $valor . depositado com sucesso ";
                $this->Saldo = $this->Saldo+$valor; 
            }
            
        }


    

       
    }

   
/*
public function getElementos(){


$numeroConta = $_GET['Numeroconta'];
$nomeTitular = $_GET['nome_titular'];
$Saldo = $_GET['Saldo'];

$convertNumeroCOnta = intval($numeroConta);
$convertSaldo = intval($Saldo);

var_dump($_GET)
}
*/
 
?>


