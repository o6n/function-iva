<?php

	function _iva($prezzo, $scorporo=false, $iva=22){

		$prezzo = (is_int($prezzo)) ? $prezzo : die('ERRORE: prezzo');
		$scorporo = (is_bool($scorporo) === true) ? $scorporo : false;
		$iva = (is_int($iva) and ($iva >= 0 && $iva <= 100)) ? $iva : die('ERRORE: iva');

		$calc = $prezzo * ($iva / 100);

		$totale = ($scorporo === true) ? $calc : $prezzo + ($calc);

		$totale = round($totale, 2);

		return $totale; 
	}

	echo '<p>'._iva(1000).'</p>'."\n"; // restituirà il prezzo compreso d'iva
	echo '<p>'._iva(1000,true).'</p>'."\n"; // restituirà lo scorporo dell'iva

?>
