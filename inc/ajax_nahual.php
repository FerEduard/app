<?php
	$dateini = strtotime('1970-01-01');
	$datefin = strtotime($_POST['fecha']); 
	$days = ($datefin - $dateini) / (60*60*24) % 13;
	
	if($days == 0)  {
		$days = 13;	
	}
	
	header("Content-Type: text/html;charset=utf-8");
	echo $days;
?>