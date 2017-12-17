<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	
	<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #002080;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #b3ccff;
}
</style>



</head>


<?php

	include("conexion.php");
	global $flage;
	$kit=$_POST['nkit'];
 	$Presc="ABC";
 	$Possc="CDE";
 	$status="ErrorSelloContainer";
 	$var=$_POST['SC1'];
	$varpre=substr($var,0, 3);
	$varnum=substr($var,3,3);
	$varfin=substr($var,6,3);
	$longc=strlen($var);

	if(($varpre==$Presc) && ($varfin==$Possc) &&($varnum>100)&&($varnum<201)&&($longc==9)){
		$flagc=1;
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Error en container")';
		echo '</script>';
	}

	if($kit==5){
		$var5=$_POST['SE1'];
		 $var6=$_POST['SE2'];
		 $var7=$_POST['SE3'];
		 $var8=$_POST['SE4'];
		 $var9=$_POST['SE5'];
	
		$ret1=validacion($var5);
		$ret2=validacion($var6);
		$ret3=validacion($var7);
		$ret4=validacion($var8);
		$ret5=validacion($var9);

		if(($flagc==1)&&($ret1==1)&&($ret2==1)&&($ret3==1)&&($ret4==1)&&($ret5==1)){
		$con=mysql_connect($host, $user, $pw);
		mysql_select_db($db, $con) or die("problemas al conectar la db");
		mysql_query("INSERT INTO producto (Container,Etiqueta1,Etiqueta2,Etiqueta3,Etiqueta4,Etiqueta5) vALUES ('$var' , '$var5', '$var6','$var7', '$var8', '$var9')",$con);
	 	echo "<p>Los datos han sido guardados con exito.</p>    
           <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>  ";
   		 }


	}
	elseif($kit==12){
		$var5=$_POST['SE1'];
		$var6=$_POST['SE2'];
		$var7=$_POST['SE3'];
		$var8=$_POST['SE4'];
		$var9=$_POST['SE5'];
		$var10=$_POST['SE6'];
		$var11=$_POST['SE7'];
		$var12=$_POST['SE8'];
		$var13=$_POST['SE9'];
	    $var14=$_POST['SE10'];
		$var15=$_POST['SE11'];
		$var16=$_POST['SE12'];
		
		$ret1=validacion($var5);
		$ret2=validacion($var6);
		$ret3=validacion($var7);
		$ret4=validacion($var8);
		$ret5=validacion($var9);
		$ret6=validacion($var10);
		$ret7=validacion($var11);
		$ret8=validacion($var12);
		$ret9=validacion($var13);
		$ret10=validacion($var14);
		$ret11=validacion($var15);
		$ret12=validacion($var16);

		if(($flagc==1)&&($ret1==1)&&($ret2==1)&&($ret3==1)&&($ret4==1)&&($ret5==1)&&($ret6==1)&&($ret7==1)&&($ret8==1)&&($ret9==1)&&($ret10==1)&&($ret11==1)&&($ret12==1)){

			$con=mysql_connect($host, $user, $pw);
			mysql_select_db($db, $con) or die("problemas al conectar la db");
			mysql_query("INSERT INTO producto2 (Container,Etiqueta1,Etiqueta2,Etiqueta3,Etiqueta4,Etiqueta5,Etiqueta6,Etiqueta7,Etiqueta8,Etiqueta9,Etiqueta10,Etiqueta11,Etiqueta12) vALUES ('$var' , '$var5', '$var6','$var7', '$var8', '$var9', '$var10', '$var11', '$var12', '$var13', '$var14', '$var15', '$var16')",$con);
		 	mysql_close();
		 	echo "<p>Los datos han sido guardados con exito.</p>    
	           <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>  ";
	      
   		 }

	}

	if($kit==5){

		$con=mysql_connect($host, $user, $pw);
		mysql_select_db($db, $con) or die("problemas al conectar la db");
		$result = mysql_query("SELECT * FROM producto   ORDER BY kit ASC", $con);  
		//se despliega el resultado  
		echo "<table>";  
		echo "<tr>";  
		echo "<th>kit</th>";  
		echo "<th>conta1</th>";  
		echo "<th>Etiqueta1</th>"; 
		echo "<th>Etiqueta2</th>";
		echo "<th>Etiqueta3</th>";
		echo "<th>Etiqueta4</th>";
		echo "<th>Etiqueta5</th>"; 
		echo "</tr>";  
		while ($row = mysql_fetch_row($result)){   
		    echo "<tr>";  
		    echo "<td>".$row[0]."</td>";  
		    echo "<td>".$row[1]."</td>";  
		    echo "<td>".$row[2]."</td>";
		    echo "<td>".$row[3]."</td>"; 
		    echo "<td>".$row[4]."</td>";
		    echo "<td>".$row[5]."</td>";
		    echo "<td>".$row[6]."</td>";
		    echo "</tr>";  
		}  
		echo "</table>";

	}
	elseif ($kit==12) {

		$con=mysql_connect($host, $user, $pw);
		mysql_select_db($db, $con) or die("problemas al conectar la db");
		$result = mysql_query("SELECT * FROM producto2   ORDER BY kit ASC", $con); 

		//se despliega el resultado  
		echo "<table>";  
		echo "<tr>";  
		echo "<th>kit</th>";  
		echo "<th>conta1</th>";  
		echo "<th>Etiqueta1</th>"; 
		echo "<th>Etiqueta2</th>";
		echo "<th>Etiqueta3</th>";
		echo "<th>Etiqueta4</th>";
		echo "<th>Etiqueta5</th>"; 
		echo "<th>Etiqueta6</th>";
		echo "<th>Etiqueta7</th>";
		echo "<th>Etiqueta8</th>";
		echo "<th>Etiqueta9</th>";
		echo "<th>Etiqueta10</th>";
		echo "<th>Etiqueta11</th>";
		echo "<th>Etiqueta12</th>";
		echo "</tr>";  
		while ($row = mysql_fetch_row($result)){   
		    echo "<tr>";  
		    echo "<td>".$row[0]."</td>";  
		    echo "<td>".$row[1]."</td>";  
		    echo "<td>".$row[2]."</td>";
		    echo "<td>".$row[3]."</td>"; 
		    echo "<td>".$row[4]."</td>";
		    echo "<td>".$row[5]."</td>";
		    echo "<td>".$row[6]."</td>";
		    echo "<td>".$row[7]."</td>";  
		    echo "<td>".$row[8]."</td>";
		    echo "<td>".$row[9]."</td>"; 
		    echo "<td>".$row[10]."</td>";
		    echo "<td>".$row[11]."</td>";
		    echo "<td>".$row[12]."</td>";
		    echo "<td>".$row[13]."</td>";
		    echo "</tr>";  
		}  
		echo "</table>"; 
	}


function validacion($vartemp){

	$Prese="A";
 	$Posse="CD";
	$varpree=substr($vartemp,0, 1);
	$varnume=substr($vartemp,1,3);
	$varfine=substr($vartemp,4,2);
	$longe=strlen($vartemp);

	if(($varpree==$Prese) && ($varfine==$Posse) &&($varnume>100)&&($varnume<601)&&($longe==6)){
		$flage=1;
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Error en etiqueta")';
		echo '</script>';
		$flage=0;
	}

    return $flage;
}





?>





