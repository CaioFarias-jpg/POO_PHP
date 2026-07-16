<?php
class Computer
{
   public static string $marca  = "INTEL"; 
    private string $modelo;
    private float $preco;

    public function getModelo()
    {
        return $this->modelo;
    }

    public static function ligarPC()//método estático
    {
        echo "Bem Vindo ao Lindows";
    }
}
if(Computer::$marca == "INTEL"){
    echo "COMPUTADOR INTEL";
}
echo '<br>';
echo Computer::ligarPC();
?>