<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Box Layouts</title>
    <link href="Styles/BoxLayoutStyle.css" rel="stylesheet" type="text/css">
	</head> 
	
	<h1 id = 'header'>
		<a href = '?'>
			<img id = 'logo'src = 'http://admiralpkg.com/wp-content/uploads/2017/05/admirallogo_header-01-300x138.png'/> <br>	
			BOX LAYOUT 
		</a>
	</h1>
	<br>
<!--	created link to revert back to API-->
	<a id = 'back' href = "index.php">&laquo;&laquo; Back To Main</a>
	<br>
	<body>
		<form id = 'form' method = "POST" action = "corrlayouts.php">
			<select name = selection class ="a" onchange = "this.form.submit();">
				<option value ="empty">SELECT A LAYOUT</option>
					<?php
						$i =0;
						$dir = "./pdfs"; // will need to change when pushed to Server
						if(is_dir($dir)){
							if($dh = opendir($dir)){
								while(($file = readdir($dh)) !== false){
									if($i !=0 && $i != 1){
									$name=substr($file,0,-4);
									echo "<option value = $i>$name </option>";
									} // endae NESTED IF
									$i++;
								} // endae WHILE 
								closedir($dh);
							} // endae NESTED IF
						} // endae IF
					?>
			</select>
			<br>
		</form>
		<?php
			if(isset($_POST['selection'])){
				$j =0;
				$dir = "./pdfs"; // NEED TO CHANGE THIS LINK WHEN MOVE TO SERVER
				if(is_dir($dir)){
					if($dh = opendir($dir)){
						while(($file = readdir($dh)) !== false){
							if($_POST['selection'] == $j){
								$name=substr($file,0,-4);
								
								echo"<h1> $name</h1>";
								echo"<p><embed id='fred' src= 'pdfs/$file' frameborder='1' height='715' width='850' ></p>"; // ALSO CHANGE SRC
							} // endae NESTED IF
							$j++;
						} // endae WHILE
						closedir($dh);
					} // endae NESTED IF
				} // endae NESTED IF
			} // endae IF
		?>

		<br>
		<br><br>
		<b>
			<p style='font-size: 25px;'>Other Resources</p>
		</b>
	<label id = 'links'>
		<a id = 'bomID' href = 'BOMCalcRevised.php' > BOM Calculator</a> 
	</label>
	<label id = 'links' >
		<a href = 'RollLengthCalculator.php' > Roll Length</a> 
	</label>
	<label id = 'links'> 
		<a href = 'conversions2.php' > Conversions</a> 
	</label>
		
	</body>
</html>







