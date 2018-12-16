<?php
	include "fonksiyon.php";
	$do=$_REQUEST["d"];
	$eu=$_REQUEST["e"];
	$site = "http://www.ekopara.com/doviz/amerikan_dolari";
	$icerik = file_get_contents($site);
	$dolar = ara('<span class="buying">','</span>', $icerik);
	//$euro = ara('class="maxS">', '</td>', $icerik);
	echo '<br><a href="http://doviz.com">döviz</a>';
	if($do<$dolar[1])
	{
	echo '<br>€=<input type="text" size="6" id="do" style="background-color:green" value="'.$dolar[1].'"></input>';	
	}else if($do>$dolar[1]){
	echo '<br>€=<input type="text" size="6" id="do" style="background-color:red" value="'.$dolar[1].'"></input>';			
	}
	else{
	echo '<br>€=<input type="text" size="6" id="do" style="background-color:yellow" value="'.$dolar[1].'"></input>';		
	}
	if($eu<$dolar[2])
	{
	echo '<br>$=<input type="text" size="6" id="eu" style="background-color:green" value="'.$dolar[2].'"></input>';	
	}else if($eu>$dolar[2]){
	echo '<br>$=<input type="text" size="6" id="eu" style="background-color:red" value="'.$dolar[2].'"></input>';		
	}
	else{
	echo '<br>$=<input type="text" size="6" id="eu" style="background-color:yellow" value="'.$dolar[2].'"></input>';	
	}
?>
