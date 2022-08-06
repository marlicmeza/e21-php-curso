<?php
$dadosarray = array(
   "1" => array ('nome' => 'Sol', 'idade' => 20, 'cep' => 88390-000, 'saldo'=> 100,"<br>"),
   "2" => array('nome' => "Lua", 'idade' => 21, 'cep' => 90300-000, 'saldo'=> 100,"<br>"),
   "3" => array('nome' => "Marte", 'idade' => 22, 'cep' => 70360-000, 'saldo'=> 100,"<br>"),
   "4" => array('nome' => "Jupter", 'idade' => 23, 'cep' => 45060-000, 'saldo'=> 100,"<br>"),
   "5" => array('nome' => "Plutão", 'idade' => 24, 'cep' => 60582-000, 'saldo'=> 100,"<br>"), 
);
    if (!$_SESSION['dadosarray']){
    $_SESSION['dadosarray'] = $dadosarray;
    }
?>



