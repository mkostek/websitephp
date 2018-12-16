<?php include "fonksiyon.php";?>
<html>
<head>
<title>Mert Hafriyat</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83214390-1', 'auto');
  ga('send', 'pageview');


	$(document).ready(function(){
	$(".haber").hide();
	var x=Math.round(Math.random()*200);
	$("div.haber").filter("#"+10+"").show(1000);
	var xmlhttp = new XMLHttpRequest();
				var d=document.getElementById('do').value;
			var e=document.getElementById('eu').value;
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						//$("div").filter("#yaz").hide();
						
						document.getElementById("yaz").innerHTML = xmlhttp.responseText;
					}
				};
				xmlhttp.open("GET", "doviz.php?d="+d+"&e="+e, true);
				xmlhttp.send();
	$("#a").click(function(){
		$("p").filter(".an").show(1000);$("p").filter(".an").fadeTo("low",1);
		$("p").not(".an").fadeTo(1000,0.22);$("p").not(".an").hide(1000);
		$("h3").filter("#an").text("Anasayfa");
	});
	
	$("#h").click(function(){$("p").filter(".ha").show(1000);
		$("p").filter(".ha").fadeTo("low",1);
		$("p").not(".ha").fadeTo(1000,0.22);$("p").not(".ha").hide(1000);
		$("h3").filter("#an").text("Hakkımızda");
	});
	$("#i").click(function(){$("p").filter(".il").show(1000);
		$("p").filter(".il").fadeTo("low",1);
		$("p").not(".il").fadeTo(1000,0.22);
			$("p").not(".il").hide(1000);
			$("h3").filter("#an").text("İletişim");
	});
	$("#p").click(function(){$("p").filter(".po").show(1000);
		$("p").filter(".po").fadeTo("low",1);
		$("p").not(".po").fadeTo(1000,0.22);
			$("p").not(".po").hide(1000);
		$("h3").filter("#an").text("Portföy");
	});
	
		$("#seçme").change(function(){
			if(document.getElementById("seçme").value=="pro")
			{
						$("img").not("#pro").hide();
						$("#pro").show(1000);
			}else if(document.getElementById("seçme").value=="dev")
			{
						$("img").not("#dev").hide();
						$("#dev").show(1000);
			}else if(document.getElementById("seçme").value=="102")
			{
						$("img").not("#yuz").hide();
						$("#yuz").show(1000);
			}else if(document.getElementById("seçme").value=="220")
			{
						$("img").not("#220").hide();
						$("#220").show(1000);
			}else if(document.getElementById("seçme").value=="160")
			{
						$("img").not("#onaltı").hide();
						$("#onaltı").show(1000);
			}
		});
	
		
		var myVar = setInterval(myTimer, 15000);
		
		function myTimer() {
			var x=Math.round(Math.random()*200);
			$("div").filter(".haber").hide(2000);
			$("div.haber").filter("#"+x+"").show(1000);
		}
		
		
		var r = setInterval(showHint, 30000);
		function showHint() {
				var xmlhttp = new XMLHttpRequest();
				var d=document.getElementById('do').value;
			var e=document.getElementById('eu').value;
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						//$("div").filter("#yaz").hide();
						
						document.getElementById("yaz").innerHTML = xmlhttp.responseText;
					}
				};
				xmlhttp.open("GET", "doviz.php?d="+d+"&e="+e, true);
				xmlhttp.send();
			}
	});
</script>
</head>
<body>
<div id="container">
<div id="header">
<h1>Mert Hafriyat
</h1>
</div>
<div id="content">
<div id="nav">
<h3>
navigasyon
</h3>
<ul>
<li><a id="a" >anasayfa</a></li>
<li><a id="h" >hakkımda</a></li>
<li><a id="i" >iletişim</a></li>
<li><a id="p" >portföy</a></li>
</ul>
</div>
<div id="nav2"><h3>
baglantilar
</h3>
  <ul>
    <li><a href="http://www.gmail.com">gmail.com</a></li>
    <li><?php
$site = "https://weather.com/weather/today/l/TUXX8626:1:TU";
$icerik = file_get_contents($site);
$alt_sicaklik = ara('<div class="today_nowcard-temp"><span class="">','<sup>', $icerik);
$alt_sicaklik[0]=round(($alt_sicaklik[0]-32)/1.8);
$ust_sicaklik = ara('<div class="today_nowcard-phrase">', '</div>', $icerik);
echo '<br><a href="http://www.mgm.gov.tr">hava durumu</a><br>edremit: ' . $ust_sicaklik[0] . '/' . $alt_sicaklik[0];
?></li><br>
<div id="yaz"><input type="text" id="do" value="0"></input><input type="text" id="eu" value="0"></input></div>
	<br><a href="http://www.ensonhaber.com">haberler</a><?php
		$site = "http://www.ensonhaber.com";
		$icerik = file_get_contents($site);
		$haber = ara('" alt="', '" />',$icerik);
	//	$ust_sicaklik = ara('class="maxS">', '</td>', $icerik);
	//$a=$haber[rand(0,20)];
	$i=1;
	$habersayisi=200;
		foreach( $haber as $a)
		{
		//
		//$a=strtolower($a);
		//
		echo '<li><div id="'.$i++.'" class="haber" stle="width=100px;height=100px;float:right;"><br>'.$a.'</div></li>';
		if($i==200)break;
		}
		
		//echo '<li><div stle="width=100px;height=100px;float:right;"><br>'.$a.'</div></li>';
		?>
  </ul>
</div>

<div id="main">
  <h3 id="an">anasayfa</h3>
<p class="an" style="opacity: 1; display: block;">
Faaliyetlerimizle ilgili detaylı bilgilere buradan ulaşabilirsiniz...
</p>
<p class="ha" style="opacity: 0.22; display: none;">
   Hafriyatta başladığı 2004 tarihinden itibaren güleryüz,samimi ve çalışkanlığıyla körfezde siz değerli müşterilerimize hizmet vermeye devam etmekteyiz.
</p>

<p class="il" style="opacity: 0.22; display: none;">
	tel:+90 532 726 56 17   <br>
	mail:merthafriyat@hotmail.com
</p>
<p class="po" style="opacity: 0.22; display: none;">
<select  id="seçme" >
  <option value="220" selected>220 Hidromek Ekskavatör</option>
  <option value="160">160 Sumitomo Ekskavatör</option>
  <option value="102">102 Hidromek Bekoloder </option>
  <option value="pro">BMC PRO 620</option>
  <option value="dev">BMC DEV Fatih</option>
</select>
	<img align="left" id="220" src="220.jpg" alt="22 tonluk ekskavatör" >  
	<br><img align="left" id="onaltı" src="160.jpg" alt="16 tonluk ekskavatör" >
	<br><img align="left" id="dev" src="dev.jpg" alt="dev fatih" >
	<img align="left" id="pro" src="pro.jpg" alt="bmc pro">
	<img align="left" id="yuz" src="102.jpg" alt="102">
</p>
</div>
<div align="right"></div>
</div>
<div id="footer">
Copyright &copy;<?php echo date("Y");?> mustafa köstek
</div>
</body>
</html>
