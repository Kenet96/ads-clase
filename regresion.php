<?php
$xx=$_POST['x'];
$yy=$_POST['y'];
	$xxx=explode("\n",$xx); 
	$yyy=explode("\n",$yy);
	$totalx = array_sum($xxx);
	$ny=count($xxx);
	$promx=$totalx/$ny;
	$totaly = array_sum($yyy);
	$nx=count($yyy);
	$promy=$totaly/$nx;
	echo "n  = \n".$nx."<br>";
	echo "Promedio de x = \n".$promx."<br>";
	echo "Promedio de y = \n".$promy."<br>";
	$sumcx=0;
	$sumpxy=0;
	for ($i=0;$i<$nx;$i++)
	{
	$sumcx=$sumcx+$xxx[$i]*$xxx[$i];
	$sumpxy=$sumpxy+$xxx[$i]*$yyy[$i];
	}
	$sumacx=$sumcx-$nx*$promx*$promx;
	$sumapxy=$sumpxy-$nx*$promx*$promy;
	$b1=$sumapxy/$sumacx;
	$bo=$promy-$b1*$promx;
	
	echo "La ecuacion de regresion es  :"."<br>";
	echo "Y=".$bo." + ".$b1." x"."<br>";
	
?>
</head>
<body>
Digite los valores X e Y:
<form id="form1" name="form1" method="post" action="regre.php">
  <p>
     <textarea name="x" cols="20" rows="30" id="x"></textarea>
     <textarea name="y" cols="20" rows="30" id="y"></textarea>
  
    <input type="submit" name="Submit" value="Regresion" />
</p>
</form> 