<?php
$sacola1 = array('item1' => 'pera', 'item2' => 'banana', 'item3' => 'leite', 'item4' =>'cafe');
$sacola2 = array('item1' => 'matambre', 'item2' =>'parmesao', 'item3' => 'mussa', 'item4' => 'temperos');
$sacola3 = array('item1' => 'carvao', 'item2' =>'sal', 'item3' => 'oliva', 'item4' => 'cheiroverde');
$sacola4 = array('item1' => 'vodka', 'item2' =>'gelo', 'item3' => 'limão', 'item4' => 'cravo');

$caixa1_da_sogra = array( 0 => $sacola1);
$caixa2_do_churr = array( 1 => $sacola2, 2 => $sacola3, 3=> $sacola4);

$carro = array_merge($caixa1_da_sogra, $caixa2_do_churr);

echo "OS INGREDIENTES DA LISTA SÃO:";
foreach ($carro as $compras){    
    foreach ($compras as $itens ){         
        echo "<br>";
      echo $itens;
                
    }
}
?>

<?php
$sacola1 = array('item1' => 'PERA', 'item2' => 'BANANA', 'item3' => 'LEITE', 'item4' =>'CAFE');
$sacola2 = array('item1' => 'MATAMBRE', 'item2' =>'PARMESAO', 'item3' => 'MUSSA', 'item4' => 'TEMPEROS');
$sacola3 = array('item1' => 'CARVAO', 'item2' =>'SAL', 'item3' => 'OLIVA', 'item4' => 'CHEIROVERDE');
$sacola4 = array('item1' => 'VODKA', 'item2' =>'GELO', 'item3' => 'LIMAO', 'item4' => 'CRAVO');

$caixa1_da_sogra = array( 0 => $sacola1);
$caixa2_do_churr = array( 1 => $sacola2, 2 => $sacola3, 3=> $sacola4);

$carro = array(0 => $caixa1_da_sogra,  1 => $caixa2_do_churr);

echo "<br><br> OS INGREDIENTES DA LISTA SÃO:";
foreach ($carro as $compras){    
    foreach ($compras as $itens ){ 
        foreach ($itens as $sacol){        
        echo "<br>--->";
      echo $sacol;
    }
                
    }
}

?>

<!-- foreach($carro['banco'] as $caixas) {
    foreach ($caixas as $itens) {
        echo $itens;
    }
} -->