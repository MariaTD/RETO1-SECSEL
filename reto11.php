<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
        <title><?php echo $titulo  ?>  | Secsel   </title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <style>
    	table{
    		border-spacing: 15px;
		}

	</style>
	<style>
		body {background-color:#b3ccff;}
		h1   {color: blue;}
		p    {color: red;}
	</style>
	<script type="text/javascript" src="jqueryy.js"> </script>
</head>

<body>

	<form action="secsel.php" method="POST" id="form1" name="form1" action="Jquery10.html"> 
		<table style="width=100%">

			<?php
				$s3=$_POST['kit'];
			?>

			<tr>
				<th>Sello Container:</th>
				<th> &nbsp; &nbsp; &nbsp; &nbsp; Sello Etiqueta: </th>
				<th> <label for="nkit"> <?php if($s3==5) { echo "  &nbsp; &nbsp; &nbsp; &nbsp; KIT   </label>   <input type=text name=nkit value=5 id=nkit style=border-color:white size=1 readonly> </th>" ; } ?>    <?php if($s3==12) { echo "  KIT   </label>   <input type=text name=nkit value=12 id=nkit style=border-color:white size=1 readonly> </th>" ; } ?> </th>
			<th>&nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="GUARDAR"  id="reset1"> </th>
           

			</tr>
		
			<tr>
				<th><label for="SC1"> <?php if(($s3==5)||($s3==12)){ echo "  Serial 1:   </label>   <input type=text name=SC1 placeholder=EscribeSerial id=SC1 onclick=this.value='';> </th>" ; } ?>    <?php if($s3!=3)  { echo "";}  ?> </th> 

				<th><label for="SE1"> <?php if(($s3==5)||($s3==12)) { echo "  Serial 1:   </label>   <input type=text name=SE1 placeholder=EscribeSerial id=SE1 onclick=this.value='';> </th>" ; } ?>   </th> 
				<th></th>	
			</tr>

			<tr>
				<th> </th> 
				<th><label for="SE2"> <?php if(($s3==5)||($s3==12)) { echo "  Serial 2:   </label>   <input type=text  name=SE2 placeholder=EscribeSerial id=SE2 onclick=this.value='';> </th>" ; } ?>    </th> 
			</tr>

			<tr>
				<th> </th> 
				<th><label for="SE3"> <?php if(($s3==5)||($s3==12)) { echo "  Serial 3:   </label>   <input type=text  name=SE3 placeholder=EscribeSerial id=SE3 onclick=this.value='';> </th>" ; } ?> </th> 
			</tr>

			<tr>
				<th></th> 
				<th><label for="SE4"> <?php if(($s3==5)||($s3==12)) { echo "  Serial 4:   </label>   <input type=text name=SE4 placeholder=EscribeSerial id=SE4 onclick=this.value='';> </th>" ; } ?>   </th> 
			</tr>

			<tr>
				<th></th> 
				<th><label for="SE5"> <?php if(($s3==5)||($s3==12)){ echo "  Serial 5:   </label>   <input type=text name=SE5 placeholder=EscribeSerial id=SE5  onclick=this.value='';> </th>" ; } ?>  </th> 
			</tr>
			<tr>
				<th></th> 
				<th><label for="SE6"> <?php if($s3==12) { echo "  Serial 6:   </label>   <input type=text name=SE6 placeholder=EscribeSerial id=SE6  onclick=this.value='';> </th>" ; } ?>    <?php if($s3!=12)  { echo "";}  ?> </th> 
			</tr>
			<tr>
				<th></th> 
				<th><label for="SE7"> <?php if($s3==12) { echo "  Serial 7:   </label>   <input type=text name=SE7 placeholder=EscribeSerial id=SE7  onclick=this.value='';> </th>" ; } ?>    <?php if($s3!=12)  { echo "";}  ?> </th> 
			</tr>
			<tr>
				<th></th> 
				<th><label for="SE8"> <?php if($s3==12) { echo "  Serial 8:   </label>   <input type=text name=SE8 placeholder=EscribeSerial id=SE8  onclick=this.value='';> </th>" ; } ?>    <?php if($s3!=12)  { echo "";}  ?> </th>
			</tr>
			<tr>
				<th></th> 
				<th><label for="SE9"> <?php if($s3==12) { echo "  Serial 9:   </label>   <input type=text name=SE9 placeholder=EscribeSerial id=SE9  onclick=this.value='';> </th>" ; } ?>    <?php if($s3!=12)  { echo "";}  ?> </th>
			</tr>
			<tr>
				<th></th> 
				<th><label for="SE10"> <?php if($s3==12) { echo "  Serial 10:   </label>   <input type=text name=SE10 placeholder=EscribeSerial id=SE10  onclick=this.value='';> </th>" ;} ?>    <?php if($s3!=12)  { echo "";}  ?> </th> 
			</tr>
			<tr>
				<th></th> 
				<th><label for="SE11"> <?php if($s3==12) { echo "  Serial 11:   </label>   <input type=text name=SE11 placeholder=EscribeSerial id=SE11  onclick=this.value='';> </th>" ; } ?>    <?php if($s3!=12)  { echo "";}  ?> </th> 
			</tr>
			<tr>
				<th></th> 
				<th><label for="SE12"> <?php if($s3==12) { echo "  Serial 12:   </label>   <input type=text name=SE12 placeholder=EscribeSerial id=SE12  onclick=this.value='';> </th>" ; } ?>    <?php if($s3!=12)  { echo "";}  ?> </th> 
			</tr>
 
		</table>

	</form>

<?php

	echo "  <p><a href='javascript:history.go(-1)'>VOLVER AL INICIO</a></p>  ";
?>