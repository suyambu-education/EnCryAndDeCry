<?php 
if(isset($_POST['EnCryBtn'])){

	$str=$_POST['En'];
}

if(isset($_POST['DecryptBtn'])){

	$vlu=$_POST	['Dn'];

}	 
?>
<html>
<head>
	<title>EnCry&&DeCry</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	echo <<<EOL
	<br><br><br><br><br><br>
	<pre style="color:red">
 ______        _____            _____        _____            
|  ____|      / ____|          |  __ \      / ____|           
| |__   _ __ | |     _ __ _   _| |  | | ___| |     _ __ _   _ 
|  __| | '_ \| |    | '__| | | | |  | |/ _ \ |    | '__| | | |
| |____| | | | |____| |  | |_| | |__| |  __/ |____| |  | |_| |
|______|_| |_|\_____|_|   \__, |_____/ \___|\_____|_|   \__, |
                           __/ |                         __/ |
                          |___/                         |___/ 

	                          			by Arun(Mr.ErRoR@Hck4~$~IND)
	                          			</pre>
EOL;

?>

	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<p>Encrypt Your Msg :</p>
	<div><textarea name="En" style="height:120px;width:420px" id="en"></textarea> 
		
	</div>
	<div>
		<label style="background-color:black;color: green;">
			<?php 
			
			if(!empty($str)){

				echo base64_encode($str); 
			}
			else{
				echo "";
			}
			 ?>
			
			
		</label> 
	</div>
	<button name="EnCryBtn" class="btn" style="height: 30px; width: 120px">Click To Encrypt</button>
	</form>

	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<p>Decrypt Your msg :</p>
		<div>
			<textarea name="Dn" style="height:120px;width:420px"></textarea>
		</div>
		<lable><?php 
			
		if(!empty($vlu)){
			echo base64_decode($vlu);

		}
		?></lable>
		<button name="DecryptBtn" class="btn red" style="height: 30px; width: 120px">Click To Decrypt</button>
	</form>
	<?php 
	echo md5(utf8_encode("Hello"));
	$st=md5(utf8_encode("Hello"));
	echo "<br> ".md5(utf8_decode($st));
	?>
</body>

</html>
