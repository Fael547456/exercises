<?php
class Vote_Main
{
  public $Total_Eleitores;
  public $Total_Validos;
  public $Total_Brancos;
  public $Total_Nulos;
    
  public function __construct($Total_Eleitores,$Total_Validos,$Total_Brancos,$Total_Nulos)
  {
    $this->Total_Eleitores = $Total_Eleitores;
    $this->Total_Validos   = $Total_Validos;
    $this->Total_Brancos   = $Total_Brancos;
    $this->Total_Nulos     = $Total_Nulos;
  }
 
  public function Porcent_Validos()
  {
   $Porcent = $this->Total_Validos * 100;
   
   $Porcent = $Porcent / $this->Total_Eleitores;
    
   echo $Porcent;
  }
  
  public function Porcent_Brancos()
  {
   $Porcent = $this->Total_Brancos * 100;
   
   $Porcent = $Porcent / $this->Total_Eleitores;
    
   echo $Porcent;
  }
 

public function Porcent_Nulos()
  {
   $Porcent = $this->Total_Nulos * 100;
   
   $Porcent = $Porcent / $this->Total_Eleitores;
    
   echo $Porcent;
  }
}


$mycalc = new Vote_Main(1000,800,150,50);
echo 'Percentual de Votos Válidos: ',$mycalc->Porcent_Validos(),'%';
echo '<br>';
echo 'Percentual de Votos Brancos: ',$mycalc->Porcent_Brancos(),'%';
echo '<br>';
echo 'Percentual de Votos Nulos: ',$mycalc->Porcent_Nulos(),'%';


?>
