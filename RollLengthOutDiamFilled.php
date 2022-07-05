<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Outer Diameter</title>
	
	
<link href="Styles/RollLengthCalculatorStyle.css" rel="stylesheet" type="text/css">
</head>

<body id = 'mainBody'>
	<?php include('RollLengthComputations.php');
	?>
	
	<h1 id = 'header1'>Roll Length Calculator Outer Diameter Results </h1>
	<br><br>
	
	<a id = 'back' href = "index.php">&laquo;&laquo; Back To Main</a>
	<div>
		<table id = 'tblLine'><tr><td height="7"></td></tr></table>
	</div>
	<br><br>
		<table id = 'mainTable'>
			<tbody>
				<tr>
					<td>
						<table id = 'mainInner'>
							<tbody id = 'mainInnerBody'>
								<tr id = 'mainRow'>
									<th id = 'tblHeader'>Outside Diameter
									</th>
									<td class = 'main'> 
										<?php 
											echo $outDiam; // prints user input for outDiam
										?> 
									</td>

									<td class = 'main' id = 'lastCell'> inches </td>
								</tr>
								<tr id = 'mainRow'>
									<th id = 'tblHeader'>Thickness of Material
									</th>
									<td class = 'main' style = '
										<?php if (ODetThickErr($outDiam, $thickness) == true) {
											echo 'border: ridge #F00; color: #F00;';} // make border and font red when error occurs
										?>
										'> 
										<?php 
											echo $thickness; // prints the user input for thickness
										?>
									</td>

									<td class='main' id = 'lastCell'> gauge </td>
								</tr>
								<tr id = 'mainRow'>
									<th id = 'tblHeader'>Center Hole Diameter
									</th>

									<td class = 'main' > 
										<?php 
										echo $innerDesc; // prints the user input for innerDiam
										?> 
									</td>

									<td class = 'main' id = 'lastCell'> inches </td>
								</tr>
								<tr id= 'mainRow'>
									<th id = 'tblHeader'>Length of Material
									</th>

									<td class = 'main'>
										<?php
											echo $length; // prints the user input for length
										?> 
									</td>

									<td class = 'main' id = 'lastCell'> feet </td>
								</tr>
								<tr id = 'lastRow'>
									<th colspan="3">
										<table>
											<tbody>
												<tr>
													<td >
														<button id='goBack' type= 'button' onClick="goBack()"> Back </button>	
													</td>
												</tr>
											</tbody>
										</table>
									</th>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<br><br>
	<div>
		<table id = 'tblLine' ><tr><td height="7"></td></tr></table>
	</div>
	<br><br>
	
		<script> 
		function goBack() {
			javascript:history.go(-1);
		}
	</script>
	<br><br><br><br>
	<div id = 'linkDiv'>
		<label id = 'links'>
			<a id = 'bomID' href = 'BOMCalcRevised.php' > BOM Calculator</a> 
		</label>
		<label id = 'links' >
			<a href = 'conversions2.php' > Conversions</a> 
		</label>
		<label id = 'links'> 
			<a href = 'corrlayouts.php' > Box Layouts</a> 
		</label>
	</div>
	
</body>
</html>