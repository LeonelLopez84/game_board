<?php $this->layout('master');

//$this->insert('game/header');

$i=1;
foreach($regalos as $regalo) {
	$regalo->indice=$i;
	$this->insert('game/regalos',['regalo'=>$regalo]);
	++$i;
}

foreach($regalos as $regalo) {
	$regalo->indice=$i;
	$this->insert('game/regalos',['regalo'=>$regalo]);
	++$i;
}

foreach($regalos as $regalo) {
	$regalo->indice=$i;
	$this->insert('game/regalos',['regalo'=>$regalo]);
	++$i;
}
 
