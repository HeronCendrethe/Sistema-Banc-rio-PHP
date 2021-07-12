<?php

class Account
{
    private $hoderName;
    private $balance;
    private $CPF;

    public function __construct($name,$cpf)
    {
        $this->verifyHoderName($name);



    }
    public function getHoderName()
    {
        return $this->hoderName;
    }
    public function getbalance()
    {
        return $this->balance;
    }
    public function getCPF()
    {
        return $this->CPF;
    }


    public function withdraw(float $valueWithdraw)
    {
      
        if ($valueWithdraw<=$this->balace){

            $this->balance-=$valueWithdraw;           
        }
        else{
        
           
            echo"Saldo Indisponivel";

        }

    }

    public function deposit(float $valueDeposit)
    {
        if ($valueDeposit>0){

            $this->balance =+ $valueDeposit;

        }
        else
        {
            echo "Atenção, você deve depositar um valor maior que 0!";
        }

    }

    public function verifyHoderName(string $Vname)
    {
        if($Vname == "" || strlen($Vname)> 5) {
          return 1;
        }
        return 0;

    }
    public function verifyCPF(int $Vcpf)
    {
        
        $arrayCPF = [];
        for($i = 2; $i<10;$i++){
            $multiplicationResult = $arrayCPF[$i]*$Vcpf;
            





        }

    }
}


