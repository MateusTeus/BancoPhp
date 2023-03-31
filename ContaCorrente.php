<?php

require_once("ContaBancaria.php");

class ContaCorrente extends ContaBancaria{
    private string $Classe = "Silver";

    public function mudarSilver(){
         $this->Classe = "Silver";
    }

    public function mudarGold(){
         $this->Classe = "gold";
    }

    public function mudarBlack(){
         $this->Classe = "black";
    }
    public function get_classe() {
        return $this->Classe;
        }
}



class contaPoupanca extends ContaBancaria{
    public function aplicarJutosMes(){
        

       // $resultadoJuros =  $this->(Saldo * 0.5) / 100
        $this->saldo += $this->saldo * 0.5 / 100.00;
        return "Juros aplicados com sucesso!";
    }
}

/*class Moeda{
    public static function formata_real($valor) {
        return "R$ " . number_format($valor, 2, ",", ".");

    }
}
*/
?>