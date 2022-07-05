<!doctype html>
<html>
	<link href="./Styles/conversion2Style.css" rel="stylesheet" type="text/css">
	<link href="Styles/conversion2PHPStyle.css" rel="stylesheet" type="text/css">
<head>
	<meta charset="utf-8">
	<title> Conversion </title>
</head>
<body>
	<?php
	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
////////////// M --> adUnits			
			function MtoLFTDisplay($ab, $adUnit) {
							echo 
								"
								<form method='POST' action='conversions2.php'>
									<h1 for= '$adUnit'> Conversion From M to $adUnit</h1>
									<p id = 'Zero'>
										<b> *CANNOT BE ZERO!* <b>
									</p>
									<p id = 'lblP'>
										<label for = 'value' > Enter $ab:  </label>
										<input type= 'number' name = 'value' placeholder = 'Enter' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
									</p>
									<p>
										<label for = 'repeat' > Enter Repeat:  </label>
										<input type= 'number' name = 'repeat' placeholder = 'Enter' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
									</p>
									<p>
										<label for = 'ipw' > <b id = 'bold' >*</b>Enter IPW<b id = 'bold'>*</b>:  </label>
										<input type= 'number' name = 'ipw' placeholder = 'Enter' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
									</p>
									
									<p>
										<input id = 'hidden' name ='$adUnit' value='$adUnit'/>
										<input id = 'hidden' name ='$ab' value='$ab'/>
									</p>
									<script>
										function setDecimal(val) {
											val.value = parseFloat(val.value).toFixed(4);
										}
									</script>
									<br>
									<div> 
										<label for = 'submit'>
											<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
											<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
										</label>
									</div>
								</form>
							";
						}	

			function MtoLYDSDisplay($ab, $adUnit) {
						echo 
							"
							<h1>Conversion From M to $adUnit</h1>
							<p id = 'Zero'>
								<b> *CANNOT BE ZERO!* <b>
							</p>
							<form for='$adUnit' method='POST' action='conversions2.php'>
								<p>
									<label for = 'value' > Enter $ab:  </label>
									<input type= 'number' name = 'value' placeholder = 'Enter' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
								</p>
								<p>
									<label for = 'repeat' > Enter Repeat:  </label>
									<input type= 'number' name = 'repeat' placeholder = 'Enter' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
								</p>
								<p>
									<label for = 'ipw' > <b id = 'bold'>*</b>Enter IPW<b id = 'bold'>*</b>:  </label>
									<input type= 'number' name = 'ipw' placeholder = 'Enter' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
								</p>

								<script>
									function setDecimal(val) {
										val.value = parseFloat(val.value).toFixed(4);
									}
								</script>


							<br>
							<div> 
								<label for = 'submit'>
									<input id = 'sub' type ='submit' name ='submit'value='Calculate' />
									<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
								</label>
							</div>
							<p>
								<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
								<input name ='$ab' id = 'hidden' value='$ab'/>
							</p>
							
							</form>
						";
					}	
		
			function MtoMSIDisplay($ab, $adUnit) {
						echo 
							"
							<h1>Conversion From M to $adUnit</h1>
							<p id = 'Zero'>
								<b> *CANNOT BE ZERO!* <b>
							</p>
							<form for='$adUnit' method='POST' action='conversions2.php'>
								<p>
									<label for = 'value' > Enter $ab:  </label>
									<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off'/>
								</p>
								<p>
									<label for = 'repeat' > Repeat:  </label>
									<input type= 'number' name = 'repeat' placeholder = 'REPEAT' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off'/>
								</p>
								<p>
									<label for = 'ipw' > <b id = 'bold'>*</b>IPW<b id = 'bold'>*</b>:  </label>
									<input type= 'number' name = 'ipw' placeholder = 'IPW' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off'/>
								</p>
								
								<p>
									<label for = 'web' > Web:  </label>
									<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off'/>
								</p>

								<p>
									<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
									<input name ='$ab' id = 'hidden' value='$ab'/>
								</p>								

								<script>
									function setDecimal(val) {
										val.value = parseFloat(val.value).toFixed(4);
									}
								</script>


							<br>
							<div> 
								<label for = 'submit'>
									<input id = 'sub' type ='submit' name ='submit'value='Calculate' />
									<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
								</label>
							</div>
							</form>
						";
					}
			
			function MtoLBSDisplay($ab, $adUnit) {
						echo 
							"
							<h1>Conversion From M to $adUnit</h1>
							<p id = 'Zero'>
								<b> *CANNOT BE ZERO!* <b>
							</p>
							<form for='$adUnit' method='POST' action='conversions2.php'>
								<p>
									<label for = 'value' > Enter $ab:  </label>
									<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
								</p>
								<p>	
									<label style='margin-left:0px;' for = 'repeat' > Enter Repeat:  </label>
									<input type= 'number' name = 'repeat' placeholder = 'REPEAT' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
								</p>
								<p>	
									<label for = 'ipw' > <b id = 'bold'>*</b>Enter IPW<b id = 'bold''>*</b>:  </label>
									<input type= 'number' name = 'ipw' placeholder = 'IPW' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
								</p>
								<p>
									<label style='margin-left:0px;' for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*</b>:  </label>
									<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
								</p>
								<p>
									<label style='margin-left:0px;'for = 'web' > Enter Web:  </label>
									<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
								</p>
								<p>
									<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
									<input name ='$ab' id = 'hidden' value='$ab'/>
								</p>
								

								<script>
									function setDecimal(val) {
										val.value = parseFloat(val.value).toFixed(4);
									}
								</script>


							<br>
							<br><br><br><br>
							<div> 
								<label for = 'submit'>
									<input id = 'sub' type ='submit' name ='submit'value='Calculate' />
									<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
								</label>
							</div>
							</form>
						";
					}
			
			function MtoMFTDisplay($ab, $adUnit) {
				echo "
					<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting from $ab to MFT </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p id = 'lblP'>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'Enter M ' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'repeat' > Enter Repeat:  </label>
							<input type= 'number' name = 'repeat' placeholder = 'Enter Repeat' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'ipw' > <b id = 'bold' >*</b>Enter IPW<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'ipw' placeholder = 'Enter IPW' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						
						<p>
							<input id = 'hidden' name ='$adUnit' value='$adUnit'/>
							<input id = 'hidden' name ='$ab' value='$ab'/>
						</p>	
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
								console.log(val);
							}
							
						</script>
						<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
						<input name ='$ab' id = 'hidden' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
				
			}
			
////////////// LFT --> adUnits 
	// LFT --> M
			function LFTtoMDisplay($ab, $adUnit) {
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LFT to M</h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						
						<p>
							<label for = 'repeat' > <b id = 'bold'>*</b>Enter Repeat<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'repeat' placeholder = 'REPEAT' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						
						<p>
							<label for = 'ipw' > <b id = 'bold'>*</b>Enter IPW<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'ipw' placeholder = 'IPW' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}

	// LFT --> LYDS
			function LFTtoLYDSDisplay($ab, $adUnit) {
				echo 
					"<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LFT to LYDS </h1>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}

	// LFT --> MSI
			function LFTtoMSIDisplay($ab, $adUnit) {
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LFT to M </h1>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > Enter Web:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						
						
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub'type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
	// LFT -- > LBS
			function LFTtoLBSDisplay($ab, $adUnit) {//			formula $lbs = ($value*12*$web)/$yield; // computes LBS				
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LFT to M </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input 'type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > Enter Web:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
	// LFT --> MFT
			function LFTtoMFTDisplay($ab, $adUnit) {
				echo "
					<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting from $ab to MFT</h1>
						<p>
							<label for = 'mftValue'> Enter LFT </label>
							<input type= 'number' name = 'lftValue' placeholder = 'LFT Value' value =''  maxlength = '15' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>	
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
						<input name ='$ab' id = 'hidden' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
			
///////////// LYDS --> adUnits	
		// forumla $lft = $value*3; // comptutes unit LFT
			function LYDStoMDisplay($ab, $adUnit) {
	//			forumla $m = (($value*36)/$repeat*$ipw)/1000;  // calculating M
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LYDS to M</h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>

						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input id ='input' type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'repeat' > <b id = 'bold'>*</b>Enter Repeat<b id = 'bold'>*</b>:  </label>
							<input id = 'input' type= 'number' name = 'repeat' placeholder = 'REPEAT' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'ipw' > <b id = 'bold'>*</b>Enter IPW<b id = 'bold'>*</b>:  </label>
							<input id = 'input' type= 'number' name = 'ipw' placeholder = 'IPW' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}

			function LYDStoLFTDisplay($ab, $adUnit) {
				echo 
					"<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LYDS to LFT </h1>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
	
			function LYDStoMSIDisplay($ab, $adUnit) {//				formula $unitMSI =($value*36*$web)/1000; // computes MSI
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LYDS to MSI </h1>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > Enter Web:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id = 'sub' type ='submit' name ='submit' value='Calculate' />
								<input id = 'sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			
			
		} // endae OUTER IF
			
			function LYDStoLBSDisplay($ab, $adUnit) {//			formula $unitLBS = ($value*36*$web)/$yield; // computes unit LBS			
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LYDS to LBS </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > Enter Web:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
							<label for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			} 
			
			function LYDStoMFTDisplay($ab, $adUnit) { 
				echo "
					<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting from $ab to MFT</h1>
						<p>
							<label for = 'mftValue'> Enter LYDS </label>
							<input type= 'number' name = 'lydsValue' placeholder = 'LYDS Value' value =''  maxlength = '15' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>	
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
						<input name ='$ab' id = 'hidden' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
		
//////////// METERS --> adUnits
			function METERStoMDisplay($ab, $adUnit) { //				formula $unitM =(($value*39.4)/$repeat*$ipw)/1000; // computes for M
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From METERS to M</h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>

						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'repeat' > <b id = 'bold'>*</b>Enter Repeat<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'repeat' placeholder = 'REPEAT' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'ipw' > <b id = 'bold'>*</b>Enter IPW<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'ipw' placeholder = 'IPW' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
							
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
			
			function METERStoLFTDisplay($ab, $adUnit) {
				// formula	$lft =($value*39.4)/12; // computes LFT
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From METERS to LFT </h1>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						
						
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>";
			}
			
			function METERStoLYDSDisplay($ab, $adUnit) {
				// formula	$lyds = ($value*39.4)/36; // computes LYDS
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From METERS to LYDS </h1>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						
						
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>";
			}
			
			function METERStoMSIDisplay($ab, $adUnit) { //				forumla $unitMSI=($value*39.4*$web)/1000; // computes MSI
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From METERS to MSI </h1>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > Enter Web:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
			
			function METERStoLBSDisplay($ab, $adUnit) { //				formula $unitLBS = ($value*39.4*$web)/$yield; // computes LBS
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From METERS to LBS </h1>
						<p style ='color:#F00;'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > Enter Web:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*<b/>:  </label>
							<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
				
			}
		
			function METERStoMFTDisplay($ab, $adUnit) { echo " 
					<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting from $ab to MFT</h1>
						<p>
							<label for = 'mftValue'> Enter METERS </label>
							<input type= 'number' name = 'metersValue' placeholder = 'METERS Value' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>	
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
						<input name ='$ab' id = 'hidden' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>";}
			
//////////// MSI --> adUnits
			function MSItoMDisplay($ab, $adUnit) {
				//	formula $unitM =($value*$ipw)/($web*$repeat); // computes M //				NOTE : MISSING NUMBER ACROSS! MUST CHECK FORMULA VALIDITY!
				echo 
					"
					<form for='$adUnit' method='POST' action='conversions2.php'>
						<h1>Conversion From MSI to M</h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>	
							<label for = 'repeat' ><b id = 'bold'>*</b>Repeat<b id = 'bold'>*</b>:</label>
							<input type= 'number' name = 'repeat' placeholder = 'REPEAT' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>	
							<label for = 'ipw' > <b id = 'bold'>*</b>IPW<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'ipw' placeholder = 'IPW' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > Web:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>

						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit'value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
	// MSI --> LFT
			function MSItoLFTDisplay($ab, $adUnit) {
				//	formula $unitLFT=($value*1000)/$web/12; // computes for LFT
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From MSI to LFT</h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > <b id = 'bold'>*</b>Enter Web<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			
			
		}
	// MSI --> LYDS
			function MSItoLYDSDisplay($ab, $adUnit) { //				formula	$lyds=($value*1000)/$web/36; // computes for LYDS
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From MSI to LYDS </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > <b id = 'bold'>*</b>Enter Web<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form> ";
			}
			
			function MSItoLBSDisplay($ab, $adUnit) {
				// formula	$unitLBS=$value*1000/$yield; // computes LBS
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From MSI to LBS </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*</>:  </label>
							<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
			
			function MSItoMFTDisplay($ab, $adUnit) {
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From MSI to MFT </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > <b id = 'bold'>*</b>Enter Web<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'webValue' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form> ";
			}

/////////// LBS --> adUnits
			
			function LBStoMDisplay($ab, $adUnit) {  //				formula $unitM =($value)/$lbsm*1000; // computes M
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LBS to M </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'lbsm' > <b id = 'bold'>*</b>Enter LBS/M<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'lbsm' placeholder = 'LBS/M' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}
			
			function LBStoLFTDisplay($ab, $adUnit) { //				formula	$unitLFT =($value*$yield)/$web/12; // computes LFT
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LBS to LFT</h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > <b id = 'bold'>*</b>Enter Web<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			
			
		}
			
			function LBStoLYDSDisplay($ab, $adUnit) { //				formula	$unitLYDS =($value*$yield)/$web/36; // computes LFT
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LBS to LYDS</h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>
						<p>
							<label for = 'web' > <b id = 'bold'>*</b>Enter Web <b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'web' placeholder = 'WEB' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			
			
		}
			
			function LBStoMSIDisplay($ab, $adUnit) { //				formula	$unitMSI =($value*$yield)/1000; // computes MSI
				echo 
					"
					<form method='POST' action='conversions2.php'>
						<h1 name = '$adUnit'>Conversion From LBS to MSI </h1>
						<p id = 'Zero'>
							<b> *CANNOT BE ZERO!* <b>
						</p>
						<p>
							<label for = 'value' > Enter $ab:  </label>
							<input type= 'number' name = 'value' placeholder = 'VALUE' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for = 'yield' > <b id = 'bold'>*</b>Enter Yield<b id = 'bold'>*</b>:  </label>
							<input type= 'number' name = 'yield' placeholder = 'YIELD' value =''  maxlength = '10' onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<p>
							<input name ='$adUnit' id = 'hidden' value='$adUnit'/>
							<input name ='$ab' id = 'hidden' value='$ab'/>
						</p>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input id='sub' type ='submit' name ='submit' value='Calculate' />
								<input id='sub' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
				 //				$newFilm
			}
			
    //			function LBStoMFTDisplay($ab, $adUnit) {} 
			
/////////// MFT --> adUnits
			function MFTtoMDisplay($ab, $adUnitM) { // FORMULA --> (MFT / ((repeat)/12) * IPW) = M
				echo "
					<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting From MFT</h1>
						
						<p>
							<label for = 'mftValue'> Enter MFT </label>
							<input type= 'number' name = 'mftValue' placeholder = 'MFT Value' value =''  maxlength = '10' onChange='setDecimal(this)' step = '.0001' autofocus autocomplete='off' />
						</p>
						<p>
							<label for='repeatValue'> Enter Repeat</label>
							<input type='number' name = 'repeatValue' placeholder = 'Enter Repeat' value = '' maxlength = '10' onChange = 'setDecimal(this)' step = '.0001' autocomplete = 'off' />
						</p>
						<p>
							<label for='ipwValue'> Enter IPW </label>
							<input type='number' name = 'ipwValue' placeholder = 'Enter IPW' value = '' maxlength = '10' onChange = 'setDecimal(this)' step = '.0001' autocomplete = 'off' />
						</p>
							
						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<input name ='$adUnitM' style='display:none;' value='$adUnitM'/>
						<input name ='$ab' style='display:none;' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input style = 'font-size: 20px;' type ='submit' name ='submit' value='Calculate' />
								<input style = 'font-size: 20px;' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>
				";
			}		
			function MFTtoLFTDisplay($ab, $adUnitLFT) { 
					echo "<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting From MFT</h1>
						
						<p>
							<label for = 'mftValue'> Enter MFT </label>
							<input type= 'number' name = 'mftValue' placeholder = 'MFT Value' value =''  maxlength = '10' onChange='setDecimal(this)' step = '.0001' autofocus autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<input name ='$adUnitLFT' style='display:none;' value='$adUnitLFT'/>
						<input name ='$ab' style='display:none;' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input style = 'font-size: 20px;' type ='submit' name ='submit' value='Calculate' />
								<input style = 'font-size: 20px;' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>	";
			 }
			
			function MFTtoLYDSDisplay($ab, $adUnitLYDS) { 
				echo "<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting From MFT</h1>
						
						<p>
							<label for = 'mftValue'> Enter MFT </label>
							<input type= 'number' name = 'mftValue' placeholder = 'MFT Value' value =''  maxlength = '10' onChange='setDecimal(this)' step = '.0001' autofocus autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<input name ='$adUnitLYDS' style='display:none;' value='$adUnitLYDS'/>
						<input name ='$ab' style='display:none;' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input style = 'font-size: 20px;' type ='submit' name ='submit' value='Calculate' />
								<input style = 'font-size: 20px;' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>	";
			 }
	/////////// MFT --> METERS DISPLAY
			function MFTtoMETERSDisplay($ab, $adUnitMETERS) { 
				echo "<form method = 'POST' action = 'conversions2.php'>
						<h1> Converting From MFT</h1>
						
						<p>
							<label for = 'mftValue'> Enter MFT </label>
							<input type= 'number' name = 'mftValue' placeholder = 'MFT Value' value =''  maxlength = '10' onChange='setDecimal(this)' step = '.0001' autofocus autocomplete='off' />
						</p>

						<script>
							function setDecimal(val) {
								val.value = parseFloat(val.value).toFixed(4);
							}
						</script>
						<input name ='$adUnitMETERS' style='display:none;' value='$adUnitMETERS'/>
						<input name ='$ab' style='display:none;' value='$ab'/>
						<br>
						<br>
						<div> 
							<label for = 'submit'>
								<input style = 'font-size: 20px;' type ='submit' name ='submit' value='Calculate' />
								<input style = 'font-size: 20px;' type ='reset' name ='reset' value ='Clear' />
							</label>
						</div>
					</form>	";
			 }
	////////// MFT --> MSI DISPLAY
			 function MFTtoMSIDisplay($ab, $adUnitMSI) { 
				echo "<form method = 'POST' action = 'conversions2.php'>
				<h1> Converting From MFT</h1>
				
				<p>
					<label for = 'mftValue'> Enter MFT </label>
					<input type= 'number' name = 'mftValue' placeholder = 'MFT Value' value =''  maxlength = '10' onChange='setDecimal(this)' step = '.0001' autofocus autocomplete='off' />
				</p>

				<p>
					<label for = 'webValue'> Enter Web </label>
					<input type= 'number' name = 'webValue' placeholder = 'Web Value' value =''  maxlength = '10' onChange='setDecimal(this)' step = '.0001' autofocus autocomplete='off' />
				</p>

				<script>
					function setDecimal(val) {
						val.value = parseFloat(val.value).toFixed(4);
					}
				</script>
				<input name ='$adUnitMSI' style='display:none;' value='$adUnitMSI'/>
				<input name ='$ab' style='display:none;' value='$ab'/>
				<br>
				<br>
				<div> 
					<label for = 'submit'>
						<input style = 'font-size: 20px;' type ='submit' name ='submit' value='Calculate' />
						<input style = 'font-size: 20px;' type ='reset' name ='reset' value ='Clear' />
					</label>
				</div>
			</form>	";
			  }
			
		} // endae OUTER IF
	?>
		

<!-- HTML -->
	<h1 id  ='header1'>
		<a id = 'headerLink' href = '?' > 
		<img id = 'logo'src = 'http://admiralpkg.com/wp-content/uploads/2017/05/admirallogo_header-01-300x138.png'/> <br>	
		Conversion Calculator </a>
	</h1>	
	<p>
		<a id = 'back' href = "index.php"  >&laquo;&laquo; Back To Main</a>
	</p>

	<div id = 'divID' >
		<form id = 'mainForm' method = 'POST' action = "conversions2.php">
<!--			creaing form to indicate action-->
			
<!--		label and input for computations 	-->
			<p>
				<label > Choose Unit of Measure to Convert From: </label>
				<label id = 'toUnitIDlbl' > Choose Unit of Measure to Convert To :  </label>
			</p>
			<p>
				<select name=fromUnit size = '1' single onChange='this.form.submit();'> 
					<option value = 'null' disabled selected> SELECT</option>
					<option value = "M" 
								<?php if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'M') echo 'selected' ?> 
							>M</option>	
					<option value = "LFT" 
								<?php if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LFT') echo 'selected' ?> 
							>LFT</option>	
					<option value = "LYDS" 
								<?php if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LYDS') echo 'selected' ?> 
							>LYDS</option>
					<option value = "METERS" 
								<?php if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'METERS') echo 'selected' ?> 
							>METERS</option>
					<option value = "MSI" 
								<?php if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'MSI') echo 'selected' ?>
							>MSI</option>
					<option value = "LBS" 
								<?php if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LBS') echo 'selected' ?> 
							>LBS</option>	
					<option value = "MFT" 
								<?php if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'MFT') echo "selected " ?> 
							>MFT</option>
				</select>
<!--			selection of units to convert between onChange='this.form.submit();'-->
				<select id='toUnitID' name='toUnit'  type = 'submit'  single onChange='this.form.submit();' required size= '1' ?>> 
					<option value = 'null' disabled  selected 
							>SELECT</option>
					<option name='m' value = "M" 
								<?php if(isset($_POST['toUnit']) && $_POST['toUnit'] == 'M') echo "selected";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'M') echo "disabled style=display:none;"; 
									//if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'METERS') echo "disabled style=display:none;";
									?>
							>M</option>	
					<option name='lft' value = "LFT" 
								<?php if(isset($_POST['toUnit']) && $_POST['toUnit'] == 'LFT') echo "selected"; 
									 if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LFT') echo "disabled style=display:none;";
									//  if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LYDS') echo "disabled style=display:none;"
									 
									 ?>
							>LFT</option>	
					<option name='lyds' value = "LYDS" 
								<?php if(isset($_POST['toUnit']) && $_POST['toUnit'] == 'LYDS') {echo "selected";} 
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LYDS') echo "disabled style=display:none;";
									// if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LFT') echo "disabled style=display:none;"; 
									?>
							>LYDS</option>	
					<option name='meters' value = "METERS" 
								<?php if(isset($_POST['toUnit']) && $_POST['toUnit'] == 'METERS') echo "selected"; 
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'M') echo " disabled style=display:none;";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'METERS') echo "disabled style=display:none;"; 
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LFT') echo "disabled style=display:none;";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LYDS') echo "disabled style=display:none;";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'MSI') echo "disabled style=display:none;";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LBS') echo "disabled style=display:none;"?>
							>METERS</option>
					<option name='msi' value = "MSI" 
								<?php if(isset($_POST['toUnit']) && $_POST['toUnit'] == 'MSI') echo "selected";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'MSI') echo "disabled style=display:none;"; ?>
							>MSI</option>
					<option name='lbs' value = "LBS" 
								<?php if(isset($_POST['toUnit']) && $_POST['toUnit'] == 'LBS') echo "selected";
									if(isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LBS') echo "disabled style=display:none;"; 
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'MFT') echo "disabled style=display:none;";?>
							>LBS</option>
					<option name='mft' value = "MFT"
								<?php if(isset($_POST['toUnit']) && $_POST['toUnit'] == 'MFT') echo "selected";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'MFT') echo "disabled style=display:none;";
									if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'LBS') echo "disabled style=display:none;";
									// if (isset($_POST['fromUnit']) && $_POST['fromUnit'] == 'M') echo "disabled style=display:none;";
								 ?>
							> MFT</option>	
				</select>
			</p>
				<h3 style = 'color: red; text-decoration: underline'> <b>***</b> NUMBER ACROSS IS NOT USED! <b>***</b> </h3>
		</form>
	</div>
	<br><br>  
	<?php
	// PHP CODE THAT WILL DISPLAY THE USER INPUT PAGE
		if (isset($_POST['fromUnit']) && isset($_POST['toUnit'])) {		
			function alertError() {
				echo "<p style = 'color: #FF0000; margin-bottom:30px;'><b>*****Cannot Covert between these two particular units!*****<b><p>";
			} // endae alertError function
			
//		if statement when from unit M is selected
			if ($_POST['fromUnit'] == 'M') {		
				if ($_POST['toUnit'] == 'METERS' | $_POST['toUnit'] == 'M') {
					alertError();
				} // endae IF
				else {
					if ($_POST['toUnit'] == 'LFT') {
						MtoLFTDisplay('M', 'LFT');
					}// endae IF inner for LFT
					else if ($_POST['toUnit'] == 'LYDS') {
						MtoLYDSDisplay('M', 'LYDS');
					} // endae IF inner for LYDS
					else if($_POST['toUnit'] == 'MSI') {
						MtoMSIDisplay('M', 'MSI');
					} // endae IF inner for MSI
					else if($_POST['toUnit'] == 'LBS') {
						MtoLBSDisplay('M', 'LBS');
					} // endae IF for when toUnit == 'LBS'
					else if ($_POST['toUnit'] == 'MFT') {
						MtoMFTDisplay('M', 'MFT');
					}
				} // endae ELSE	
			}	// endae IF for M
			
//		if statement when from unit LFT is selected
			else if ($_POST['fromUnit'] == 'LFT') {
				if ($_POST['toUnit'] == 'LFT' | $_POST['toUnit'] == 'METERS') {
					alertError();
				} // endae IF
				else {
					if ($_POST['toUnit'] == 'M') {
						LFTtoMDisplay('LFT' , 'M1');
					} // endae IF inner for M
					else if($_POST['toUnit'] == 'LYDS') {
						LFTtoLYDSDisplay('LFT', 'LYDS1');
					}
					else if ($_POST['toUnit'] == 'MSI') {
						LFTtoMSIDisplay('LFT' , 'MSI1');
					} // enae IF inner for MSI
					else if ($_POST['toUnit'] == 'LBS') {
						LFTtoLBSDisplay('LFT' , 'LBS1');
					} // endae IF inner for LBS
					else if ($_POST['toUnit'] == 'MFT') {
						LFTtoMFTDisplay('LFT', 'MFT1');
					}
				} // endae ELSE
			} // endae IF for LFT
			
//		if statemetn when from unit LYDS is selected
			else if ($_POST['fromUnit'] == 'LYDS') {
				if ($_POST['toUnit']== 'LYDS' | $_POST['toUnit'] == 'METERS') {
					alertError();
				} // enda IF
				else {
					if ($_POST['toUnit'] == 'M') {
						LYDStoMDisplay('LYDS' , 'M1');
					} // endae IF inner for M
					else if ($_POST['toUnit'] == "LFT") {
						LYDStoLFTDisplay('LYDS', 'LFT1');
					}
					else if ($_POST['toUnit'] == 'MSI') {
						LYDStoMSIDisplay('LYDS' , 'MSI1');
					} // endae IF inner for MSI
					else if ($_POST['toUnit'] == 'LBS') {
						LYDStoLBSDisplay('LYDS' , 'LBS1');
					} // endae IF inner for LBS
					else if ($_POST['toUnit'] == 'MFT') {
						LYDStoMFTDisplay('LYDS', 'MFT1');
					}
				} // endae ELSE
			} // endae IF for LYDS	
			
//		if statement when from unit METERS is selected
			else if ($_POST['fromUnit'] == 'METERS') {
				if ($_POST['toUnit'] == 'METERS') {
					alertError();
				} // endae IF
				else {
					if ($_POST['toUnit'] == 'M') {
						METERStoMDisplay('METERS' , 'M1');
					} // endae IF inner for M
					else if ($_POST['toUnit'] == 'LFT') {
						METERStoLFTDisplay('METERS', 'LFT1');
					}
					else if ($_POST['toUnit'] == 'LYDS') {
						METERStoLYDSDisplay('METERS', 'LYDS1');
					}
					else if ($_POST['toUnit'] == 'MSI') {
						METERStoMSIDisplay('METERS' , 'MSI1');
					} // endae IF inner for MSI
					else if ($_POST['toUnit'] == 'LBS') {
						METERStoLBSDisplay('METERS' , 'LBS1');
					} // endae IF inner for LBS
					else if ($_POST['toUnit'] == 'MFT') {
						METERStoMFTDisplay('METERS', 'MFT1');
					}
				}
			} // endae IF for METERS
			
//		if statement when from unit MSI is selected
			else if ($_POST['fromUnit'] == 'MSI') {
				if ($_POST['toUnit'] == 'METERS' | $_POST['toUnit'] == 'MSI') {
					alertError();
				} // endae IF
				else {
					if ($_POST['toUnit'] == 'M') {
						MSItoMDisplay('MSI' , 'M1');
					} // endae IF inner for M
					else if ($_POST['toUnit'] == 'LFT') {
						MSItoLFTDisplay('MSI' , 'LFT1');
					} // endae IF inner for LFT
					else if ($_POST['toUnit'] == 'LYDS') {
						MSItoLYDSDisplay('MSI' , 'LYDS1');
					} // endae IF inner for LYDS
					else if ($_POST['toUnit'] == 'LBS') {
						MSItoLBSDisplay('MSI' , 'LBS1');
					} // endae IF inner for LBS
					else if ($_POST['toUnit'] == 'MFT') {
						MSItoMFTDisplay('MSI', 'MFT1');
					}
				} // endae ELSE
			} // endae IF for MSI
			
//		if statement when from unit LBS is selected
			else if ($_POST['fromUnit'] == 'LBS') {
				if ($_POST['toUnit'] == 'METERS' | $_POST['toUnit'] == 'LBS') {
					alertError();
				} // endae IF
				else {
					if ($_POST['toUnit'] == 'M') {
						LBStoMDisplay('LBS' , 'M1');
					} // endae IF inner for M
					else if ($_POST['toUnit'] == 'LFT') {
						LBStoLFTDisplay('LBS' , 'LFT1');
					} // endae IF inner for LFT
					else if ($_POST['toUnit'] == 'LYDS') {
						LBStoLYDSDisplay('LBS' , 'LYDS1');
					} // endae IF inner for LYDS
					else if ($_POST['toUnit'] == 'MSI') {
						LBStoMSIDisplay('LBS' , 'MSI1');
					} // endae IF inner for LBS
				} // endae ELSE
			} // endae IF for LBS
			
//		if statement when from unit MFT is selected
			else if ($_POST['fromUnit'] == 'MFT') {		
				if ($_POST['toUnit'] == 'LBS' | $_POST['toUnit'] == 'MFT') {
					alertError();
				} // endae IF for ERROR
				else {
					if ($_POST['toUnit'] == 'M') {
						MFTtoMDisplay('MFT' , 'M1');
					} // endae IF inner for M
					else if ($_POST['toUnit'] == 'LFT') {
						MFTtoLFTDisplay('MFT' , 'LFT1');
					} // endae IF inner for LFT
					else if ($_POST['toUnit'] == 'LYDS') {
						MFTtoLYDSDisplay('MFT' , 'LYDS1');
					} // endae IF inner for LYDS
					else if ($_POST['toUnit'] == 'METERS') {
						MFTtoMETERSDisplay('MFT' , 'METERS1');
					} // endae IF inner for METERS
					else if ($_POST['toUnit'] == 'MSI') {
						MFTtoMSIDisplay('MFT', 'MSI1');
					} // endae IF inner for MSI
				} // endae ELSE
			} // endae ELSE IF for MFT
		} // endae OUTER IF
	?>

<!--	Computation Function, Results Pages, Conditions for the TOUnit-->
	<?php 
	// PHP CODE THAT WILL DO BACK END CONVERSIONS AND PRINT THE RESULTS PAGE
	
///////////////////// From Conversion M to units LFT , LYDS , MSI , LBS, MFT /////////////////////////////////////////////

		if (!empty($_POST['M'])) {
			//	if statement for just LFT conversion 
			if (!empty($_POST['LFT'])) {
				$value = $_POST['value'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				if (empty($value) || empty($repeat) || empty($ipw)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLFT = M_lftComputation($value, $repeat, $ipw);
					M_displayLFT($value, $repeat, $ipw, $unitLFT);
				}
			} // endae IF for LFT
	
	//	if statement for just LYDS conversion 
			else if (!empty($_POST['LYDS'])) {
				$value = $_POST['value'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				if (empty($value) || empty($repeat) || empty($ipw)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLYDS = M_lydsComputation($value, $repeat, $ipw);
					M_displayLYDS($value, $repeat, $ipw, $unitLYDS);
				}
			} // endae else IF for LYDS

	// if statement for MSI conversion
			else if (!empty($_POST['MSI'])) {
				$value = $_POST['value']; //				$footage = $_POST['footage'];
				$web = $_POST['web'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				if (empty($value) || empty($web) || empty($repeat) || empty($ipw) ) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {	
					$unitMSI = M_msiComputation($value, $web, $repeat, $ipw);
					M_displayMSI($value, $web, $repeat, $ipw, $unitMSI);
					
				}
			} // endae else IF for MSI
			
	//	if statement for LBS conversion
			else if (!empty($_POST['LBS'])) {
				$value = $_POST['value'];				
				$web = $_POST['web'];
				$ipw = $_POST['ipw'];
				$repeat = $_POST['repeat'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($web) || empty($yield) || empty($repeat) || empty($ipw)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = M_lbsComputations($value, $web, $ipw, $repeat, $yield);
					M_displayLBS($value, $web, $ipw, $repeat, $yield, $unitLBS);
				}
			} // endae else IF for LBS
			
	// else if statements for MFT conversion
			else if (!empty($_POST['MFT'])) {
				$value = $_POST['value'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				// $across = $_POST['across'];
				// if (empty($value)) {
				// 	echo "<script> javascript:history.go(-1) </script>";
				// } // endae IF
				// else {
				// 	$unitMFT = Units_mftComputation($value);
				// 	format("M", "MFT");
				// 	description("M", $value);
				// 	tableFormat();
				// 	tablePreview("MFT", $unitMFT);
				// 	tableEndFormat();
				// 	backBtn();
				// } // endae ELSE
				if (empty($value) || empty($repeat) || empty($ipw)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMFT = M_mftComputation($value, $repeat, $ipw);
					M_displayMFT($value, $repeat, $ipw, $unitMFT);
				}
			} // endae ELSE IF
		} // endae IF outer when ab is M
	
////////////////////////////// From LFT conversion to M , MSI , LBS, MFT ////////////////////////////////////////////////////////
		else if (!empty($_POST['LFT'])) {
			if (!empty($_POST['M1'])) {
				$value = $_POST['value'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				if (empty($value) || empty($repeat) || empty($ipw)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitM = LFT_mComputation($value, $repeat, $ipw);
					LFT_displayM($value, $repeat, $ipw, $unitM);
				}
			} // endae IF for M
			else if (!empty($_POST['LYDS1'])) {
				$value = $_POST['value'];
				$unitLYDS = LFT_lydsComputation($value);
				LFT_DisplayLYDS($value, $unitLYDS);
			}

			else if (!empty($_POST['MSI1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				if (empty($value) || empty($web)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMSI = LFT_msiComputation($value, $web);
					LFT_displayMSI($value, $web, $unitMSI);
				}
			} // endae IF for MSI
			else if (!empty($_POST['LBS1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($web) || empty($yield)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = LFT_lbsComputation($value, $web, $yield);
					LFT_displayLBS($value, $web, $yield, $unitLBS);
				}
			} // endae IF for LBS
			else if (!empty($_POST['MFT1'])) {
				$value = $_POST['lftValue'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				} // endae IF
				else {
					$unitMFT = LFT_mftComputation($value);
					LFT_displayMFT($value, $unitMFT);
					// format("LFT", "MFT");
					// description("LFT", $value);
					// tableFormat();
					// tablePreview("MFT", $unitMFT);
					// tableEndFormat();
					// backBtn();
				} // endae ELSE
			} // endae IF
			
			
		} // endae else IF outer when ab is LFT
		
///////////////////////////// From LYDS conversion to M , MSI , LBS //////////////////////////////////////////////////////////
		else if (!empty($_POST['LYDS'])) {
			if (!empty($_POST['M1'])) {
				$value = $_POST['value'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				if (empty($value) || empty($repeat) || empty($ipw)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitM = LYDS_mComputation($value, $repeat, $ipw);
					LYDS_displayM($value, $repeat, $ipw, $unitM);
				}
			}// endae IF for M
			else if (!empty($_POST['LFT1'])) {
				$value = $_POST['value'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLFT = LYDS_lftComputation($value);
					LYDS_displayLFT($value, $unitLFT);
				}
			}
			else if (!empty($_POST['MSI1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				if (empty($value) || empty($web)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMSI = LYDS_msiComputation($value, $web);
					LYDS_displayMSI($value, $web, $unitMSI);
				}
			} // endae IF for MSI
			else if (!empty($_POST['LBS1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($web) || empty($yield)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = LYDS_lbsComputation($value, $web, $yield);
					LYDS_displayLBS($value, $web, $yield, $unitLBS);
				} // endae ELSE
			} // endae IF for LBS
			else if (!empty($_POST['MFT1'])) {
				$value = $_POST['lydsValue'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				} // endae IF
				else {
					$unitMFT = LYDS_mftComputation($value);
					LYDS_displayMFT($value, $unitMFT);
				} // endae ELSE
			} // endae IF
			
		} // endae else IF outer when ab is LYDS
	
///////////////////////////////////////// From METERS conversion to M , MSI , LBS ///////////////////////////////////////////////////
		else if (!empty($_POST['METERS'])) {
			if (!empty($_POST['M1'])) {
				$value = $_POST['value'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				if (empty($value) || empty($repeat) || empty($ipw)) { 
					echo "<script> javascript:history.go(-1) </script>";
				} 
				else {
					$unitM = METERS_mComputation($value, $repeat, $ipw);
					METERS_displayM($value, $repeat, $ipw, $unitM);
				}
			}// endae IF for M
			else if (!empty($_POST['LFT1'])) {
				$value = $_POST['value'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$lft = METERS_lftComputation($value);
					METERS_displayLFT($value, $lft);
				}
			} // endae ELSE IF for LFT
			else if (!empty($_POST['LYDS1'])) {
				$value = $_POST['value'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$lyds = METERS_lydsComputation($value);
					METERS_displayLYDS($value, $lyds);
				}
			} // endae ELSE IF for LYDS
			else if (!empty($_POST['MSI1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				if (empty($value) || empty($web)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMSI = METERS_msiComputation($value, $web);
					METERS_displayMSI($value, $web, $unitMSI);
				}
			} // endae IF for MSI
			else if (!empty($_POST['LBS1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($web) || empty($yield)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = METERS_lbsComputation($value, $web, $yield);
					METERS_displayLBS($value, $web, $yield, $unitLBS);
				}
			} // endae IF for LBS
			else if (!empty($_POST['MFT1'])) {
				$value = $_POST['metersValue'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				} // endae IF
				else {
					$unitMFT = METERS_mftComputation($value);
					METERS_displayMFT($value, $unitMFT);
				} // endae ELSE
			} // endae ELSE IF
			
		} // endae else IF outer ab is METERS
	
//////////////////////////////////// From MSI conversion to M , LFT , LYDS , LBS //////////////////////////////////////////////
		else if (!empty($_POST['MSI'])) {
			if (!empty($_POST['M1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				$repeat = $_POST['repeat'];
				$ipw = $_POST['ipw'];
				if (empty($value) || empty($web) || empty($repeat) || empty($ipw)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitM = MSI_mComputation($value, $web, $repeat, $ipw);
					MSI_displayM($value, $web, $repeat, $ipw, $unitM);
				}
			} // endae IF for M
			else if (!empty($_POST['LFT1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				if (empty($value) || empty($web)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMSI = MSI_lftComputation($value, $web);
					MSI_displayLFT($value, $web, $unitMSI);
				}
			} // endae IF for LFT
			else if (!empty($_POST['LYDS1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				if (empty($value) || empty($web)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMSI = MSI_lydsComputation($value, $web);
					MSI_displayLYDS($value, $web, $unitMSI);
				}
			} // endae IF for LYDS
			else if (!empty($_POST['LBS1'])) {
				$value = $_POST['value'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($yield)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = MSI_lbsComputation($value, $yield);
					MSI_displayLBS($value, $yield, $unitLBS);	
				}
			} // endae IF for LBS
			else if (!empty($_POST['MFT1'])) {
				$value = $_POST['value'];
				$web = $_POST['webValue'];
				if (empty($value || empty($web))) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMFT = MSI_mftComputation($value, $web);
					MSI_displayMFT($value, $web, $unitMFT);
				}
			}
		} // endae else IF outer ab is MSI
	
////////////////////////////////////////// From LBS conversion to M , LFT , LYDS , MSI ///////////////////////////////////////////////////
		else if (!empty($_POST['LBS'])) {
			if (!empty($_POST['M1'])) {
				$value = $_POST['value'];
				$lbsm = $_POST['lbsm'];
				if (empty($value) || empty($lbsm)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitM = LBS_mComputation($value, $lbsm);
					LBS_displayM($value, $lbsm, $unitM);
				}
			} // endae IF for M
			if (!empty($_POST['LFT1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($web) || empty($yield)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = LBS_lftComputation($value, $web, $yield);
					LBS_displayLFT($value, $web, $yield, $unitLBS);
				}
			} // endae IF for LFT
			if (!empty($_POST['LYDS1'])) {
				$value = $_POST['value'];
				$web = $_POST['web'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($web) || empty($yield)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = LBS_lydsComputation($value, $web, $yield);
					LBS_displayLYDS($value, $web, $yield, $unitLBS);
				}
			} // endae IF for LYDS
			if (!empty($_POST['MSI1'])) {
				$value = $_POST['value'];
				$yield = $_POST['yield'];
				if (empty($value) || empty($yield)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLBS = LBS_msiComputation($value,$yield);
					LBS_displayMSI($value,$yield, $unitLBS);
				}
			} // endae IF for LFT
		} // endae else IF outer ab is LBS
	
/////////////////////////////////////// From MFT conversion to M, LFT, LYDS, METERS ///////////////////////////////////
		else if (!empty($_POST['MFT'])) {
			if (!empty($_POST['M1'])) { 
				$value = $_POST['mftValue'];
				$repeat = $_POST['repeatValue'];
				$ipw = $_POST['ipwValue'];
				// $across = $_POST['across'];
				if (empty($value) || empty($repeat) || empty($ipw)) {  // var_dump($_POST); --> for test
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$mUnit = MFT_mComputation($value, $repeat, $ipw); 
					MFT_displayM($value, $mUnit, $repeat, $ipw);
				}
			}
			else if (!empty($_POST['LFT1'])) {
				$value = $_POST['mftValue'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLFT = MFT_lftComputation($value);
					MFT_displayLFT($value, $unitLFT);
				}
			}
			else if (!empty($_POST['LYDS1'])) {
				$value = $_POST['mftValue'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitLYDS = MFT_lydsComputation($value);
					MFT_displayLYDS($value, $unitLYDS);
				}
			}
			else if (!empty($_POST['METERS1'])) {
				$value = $_POST['mftValue'];
				if (empty($value)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMETERS = MFT_metersComputation($value);
					MFT_displayMETERS($value, $unitMETERS);
				}
			}
			else if (!empty($_POST['MSI1'])) {
				$value = $_POST['mftValue'];
				$web = $_POST['webValue'];
				if (empty($value) || empty($web)) {
					echo "<script> javascript:history.go(-1) </script>";
				}
				else {
					$unitMSI = MFT_msiComputation($value, $web);
					MFT_displayMSI($value, $web, $unitMSI);
				}
			}
	}

//////////////////////// OMNES FUNCTION! /////////////////////////////////////////////////////////////////////
	
	
//////// Re-Usable function 
		function alert($flag) {
				echo"<h1 style = 'color: #F00;'>$flag CANNOT BE EMPTY OR ZERO!</h1>";
	//					echo "<p style='color:#FF0000;'> $flag CANNOT BE EMPTY OR ZERO!! </p>";
			} // endae alert function

			function backBtn() {
				echo "
					<div id = 'backBtnDiv' style = 'margin-top:50px;'>
						<button style = 'font-size: 24px; width: 150px; border: medium ridge #222; background-color: rgba(0,0,0,.1);'>
							<a href = 'javascript:history.go(-1)' style='text-decoration:none; color: #000'> Go Back </a> 
						</button>
					</div>
				";
			}

	
///////////////////////// M FUNCTION COVERSIONS!! ///////////////////////////////////////////////	
	
///////// M to LFT Functions ////////////
		function M_lftComputation($value, $repeat, $ipw) {
			if ($ipw != 0) {
				$unitLFT = ($value*$repeat/$ipw/12)*1000; // computes lFT
				return $unitLFT = number_format($unitLFT, 4);						// M_displayLFT($value, $repeat, $ipw, $unitLFT);
			}
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitLFT = 0;
			}
		} // endae lftComputation function
	//cellpadding='10' cellspacing='10' BORDER='4'
	function M_displayLFT($value, $repeat, $ipw, $unitLFT) {
		echo "
			<div>
				<table id = 'resTable' > 
					<thead> <th> <h1> Conversion from M to LFT </h1></th></thead> 
					<tbody>
						<tr><td> Entered M </td><td> $value </td></tr>
						<tr><td> Entered Repeat </td><td> $repeat </td></tr>
						<tr><td> Entered IPW </td><td> $ipw </td></tr>
						<tr>
							<td> LFT  </td><td id = 'resAns'>$unitLFT</td> 
						</tr>
					</tbody> 
				</table>
			</div> ";		
		backBtn();	
	} // enda displayLFT function		
		
///////// M to LYDS Functions //////////
		function M_lydsComputation($value, $repeat, $ipw) {
			if ($ipw != 0) {
				$unitLYDS = ($value*$repeat/$ipw)/36*1000; // computes lFT
				return $unitLYDS = number_format($unitLYDS, 4);
			}
			else { //				alert("IPW");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLYDS = 0;
			}
		} // endae lftComputation function

		function M_displayLYDS($value, $repeat, $ipw, $unitLYDS) {
			echo "
				<div>
					<table id = 'resTable'> 
						<thead> <th> <h1> Conversion from M to LYDS </h1></th></thead> 
						<tbody>
							<tr><td> Entered M </td><td> $value </td></tr>
							<tr><td> Entered Repeat </td><td> $repeat </td></tr>
							<tr><td> Entered IPW </td><td> $ipw </td></tr>
							<tr>
								<td> LYDS </td><td id = 'resAns'>$unitLYDS</td> 
							</tr>
						</tbody>	
					</table>
				</div>";		
			backBtn();
		} // enda displayLYDS function

///////// M to MSI Functions ////////////		
		function M_msiComputation($value, $web, $repeat, $ipw) {
			if ($ipw != 0) {
				$length = ($value * $repeat/$ipw);
				$unitMSI = ($web*$length); // computes MSI
				return $unitMSI = number_format($unitMSI, 4);
				} // endae IF
			else { //				alert("IPW");
				echo "<script> javascript:history.go(-1) </script>";
				$unitMSI=0;
			}
		} // endae msiCompuation function

		function M_displayMSI($value, $web, $repeat, $ipw, $unitMSI) {
			echo "
				<div>
					<table id  ='resTable'> 
						<thead> <th> <h1> Conversion from M to MSI </h1></th></thead> 
             		   	<tbody>
							<tr><td> Entered M </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr><td> Entered Repeat </td><td> $repeat </td></tr>
							<tr><td> Entered IPW </td><td> $ipw </td></tr>
							<tr>
								<td> MSI </td><td id = 'resAns' >$unitMSI</td> 
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		}

///////// M to LBS Functions ////////////
		function M_lbsComputations ($value, $web, $ipw, $repeat, $yield) {
			if ($ipw !=0 && $yield !=0) {
				$unitLBS = ($value*$web*$repeat/$ipw)/$yield;
				return $unitLBS = number_format($unitLBS, 4);
			} // endae IF
			else { //				alert("YIELD AND IPW");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLBS = 0;
			}
		} // endae lbsComputations

		function M_displayLBS($value, $web, $ipw, $repeat, $yield, $unitLBS) {
			echo "
				<div>
					<table id = 'resTable'> 
						<thead> <th> <h1> Conversion from M to LBS </h1></th></thead> 
						<tbody>
							<tr><td> Entered M </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr><td> Entered IPW </td><td> $ipw </td></tr>
							<tr><td> Entered Repeat </td><td> $repeat </td></tr>
							<tr><td> Entered Yield </td><td> $yield </td></tr>
							<tr>
								<td> LBS </td> <td id = 'resAns'>$unitLBS</td> 
							</tr>
					</table>
				</div> ";
			backBtn();
		}

///////// M to MFT functions
	function M_mftComputation($value, $repeat, $ipw) {
		if($ipw != 0 || $repeat != 0) {
			$unitMFT = $value/((12/$repeat)*$ipw);
		}
		else {
			echo "<script> javascript:history.go(-1) </script>";
			$unitMFT = 0;
		}
		return $unitMFT = number_format($unitMFT, 4);
	} // endae M_mftComputation function
	
	function M_displayMFT($value, $repeat, $ipw, $unitMFT) {
		echo "
			<div>
				<table id = 'resTable' > 
					<thead> <th> <h1> Conversion from M to MFT </h1></th></thead> 
					<tbody>
						<tr><td> Entered M </td><td> $value </td></tr>
						<tr><td> Entered Repeat </td><td> $repeat </td></tr>
						<tr><td> Entered IPW </td><td> $ipw </td></tr>
						<tr>
							<td> MFT  </td> <td id = 'resAns'>$unitMFT</td> 
						</tr>
					</tbody>
				</table>
			</div>";		
		backBtn();
	} // endae M_displayMFT function
	

////////////////////// LFT FUNCTION CONVERSIONS /////////////////////////////////

/////// LFT to M function //////////////////
		function LFT_mComputation($value, $repeat, $ipw) {
			if ($repeat != 0 && $ipw != 0) {
				$unitM = ($value*12)/(float)$repeat*$ipw/1000; // calculating M // NEED TO VERIFY THIS FORMULA
				return $unitM = number_format($unitM, 4);
			}
			else { //				alert("REPEAT and IPW");
				echo "<script> javascript:history.go(-1) </script>";
				$unitM = 0;
			}

		} // endae LFT_mComputation function

		function LFT_displayM($value, $repeat, $ipw, $unitM) {	
			echo "
				<div>
					<table id = 'resTable'>
						<thead> <th> <h1> Conversion from LFT to M </h1> </thead>
						<tbody>
							<tr> <td> Entered LFT </td> <td> $value </td> </tr>
							<tr> <td> Entered Repeat </td> <td> $repeat </td> </tr>
							<tr> <td> Entered IPW </td> <td> $ipw </td> </tr>
							<tr>
								<td> M </td><td id = 'resAns'>$unitM</td>
							</tr>
					</table>
				</div>
				"; backBtn();
		} // enae LFT_displayM function

/////// LFT to LYDS function //////////////
		function LFT_lydsComputation($value) {
			$unitLYDS = $value*3;
			return $unitLYDS = number_format($unitLYDS, 4);
		}

		function LFT_DisplayLYDS($value, $unitLYDS) {
			echo "<div>
					<table id = 'resTable'>
						<thead>
							<th> <h1> Conversion from LFT to LYDS </h1></th>
						</thead>
						<tbody>
							<tr> <td> Entered LFT </td> <td> $value </td> </tr>
							<tr>
								<td>LYDS </td> <td id =  'resAns'> $unitLYDS </td>
							</tr>
						</tbody>
					</table>
				</div>";
				backBtn();
		}

/////// LFT to MSI function ///////////////
		function LFT_msiComputation($value, $web) {
			if (!empty($web)) {
				$unitMSI = ($value*12*$web)/1000; // computes MSI
				return $unitMSI = number_format($unitMSI, 4);
			}
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitMSI = 0;
			}
		} // endae LFT_msiComputation function

		function LFT_displayMSI($value, $web, $unitMSI) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead> <th> <h1> Converion from LFT to MSI </h1> </th> </thead>
						<tbody> 
							<tr> <td> Entred LFT </td> <td> $value </td> </tr> 
							<tr> <td> Entered Web </td> <td> $web </td> </tr>
							<tr>
								<td> MSI </td> <td id = 'resAns'>$unitMSI</td>
							</tr>
						</tbody>
					</table>
				</div>
				";
			backBtn();
		} // endae LFT_displayMSI function

/////// LFT to LBS function ///////////////
		function LFT_lbsComputation($value, $web, $yield) {
			if ($yield != 0) {
				$unitLBS = ($value*12*$web)/$yield; // computes LBS
				return $unitLBS = number_format($unitLBS, 4);
			} // endae IF
			else { //				alert("YIELD");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLBS = 0;
			} // endae ELSE

		} // endae LFT_lbsComputation function 

		function LFT_displayLBS($value, $web, $yield, $unitLBS) {
				echo "
					<div>
						<table id = 'resTable'>
							<thead> <th> <h1> Conversion from LFT to LBS </h1></th></thead>
							<tbody> 
								<tr> <td> Entered LFT </td> <td> $value </td> </tr>
								<tr> <td> Entered Web </td> <td> $web </td> </tr>
								<tr> <td> Entered Yield </td> <td> $yield </td> </tr>
								<tr>
									<td> LBS </td><td id = 'resAns'>$unitLBS</td>
								</tr>
						</table>
					</div>
					";
				backBtn();
			} // endae LFT_displayLBS function
	

/////// LFT to MFT function 
		function LFT_mftComputation($value) {
			$unitMFT = $value/1000;
			return $unitMFT;
		} // endae LFT_mftComputation function
	
		function LFT_displayMFT($value, $unitMFT) {
			echo "
				<div>
					<h1> Conversion from LFT to MFT</h1>
					<table id = 'resTable'>
						<thead> <th>Entered LFT </th> <th> $value </th> </thead>
						<tbody> 
							<tr> <td> MFT </td> <td id = 'resAns'> $unitMFT </td> </tr>
						</tbody>
					</table>
				</div>
			";
			backBtn();
		} // endae LFT_displayMFT function
	


////////////////////// LYDS FUNCTION CONVERSIONS /////////////////////////////////////////

/////// LYDS to M function //////////////////
		function LYDS_mComputation($value, $repeat, $ipw) {
			if ($repeat != 0 || $ipw != 0) {
				$unitM = (($value*36)/$repeat*$ipw)/1000;  // calculating M
				return $unitM = number_format($unitM, 4);
			}
			else {//				alert("REPEAT AND IPW");
				echo "<script> javascript:history.go(-1) </script>";
				$unitM = 0;
			}
		} // endae LYDS_mComputation function
		function LYDS_displayM($value, $repeat, $ipw, $unitM) {
				echo "
					<div>
						<table id = 'resTable'>
							<thead><th><h1> Conversion from LYDS to M </h1></th></thead>
               				<tbody>
								<tr> <td> Entered LYDS </td><td> $value </td></tr>
								<tr> <td> Entered IPW </td><td> $ipw </td></tr>
								<tr> <td> Entered Repeat </td><td> $repeat </td></tr>
								<tr>
									<td> M </td> <td id = 'resAns'>$unitM</td>
								</tr>
							</tbody>
						</table>
					</div> ";
				backBtn();
			} // enae LYDS_displayM function

/////// LYDS to LFT function ///////////////
			function LYDS_lftComputation($value) {
				if ($value == 0) {
					$unitLFT == 0;
				}
				else {
					$unitLFT = $value/3;
				}
				return $unitLFT = number_format($unitLFT, 4);
			}

			function LYDS_displayLFT($value, $unitLFT) {
				echo "
					<div>
						<table id = 'resTable'>
							<thead><th><h1> Conversion from LYDS to LFT </h1></th></thead>
							<tbody>
								<tr> <td> Entered LYDS </td><td> $value </td></tr>
								<tr>
									<td> LFT </td> <td id =  'resAns'> $unitLFT </td>
								</tr>
							</tbody>
						</table>
					</div>";
				backBtn();
			}



/////// LYDS to MSI function ///////////////
		function LYDS_msiComputation($value, $web) {
			if ($web !=0) {
				$unitMSI =($value*36*$web)/1000; // computes MSI
				return $unitMSI = number_format($unitMSI, 4);
			} // endae IF
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitMSI = 0;
			}
		} // endae LYDS_msiComputation function
		function LYDS_displayMSI($value, $web, $unitMSI) {
				echo "
					<div>
						<table id = 'resTable'>
							<thead><th><h1> Conversion from LYDS to MSI </h1></th></thead>
							<tbody>
								<tr> <td> Entered LYDS </td><td> $value </td></tr>
								<tr> <td> Entered Web </td><td> $web </td></tr>
								<tr>
									<td> MSI </td> <td id = 'resAns'>$unitMSI</td>
								</tr>
							</tbody>
						</table>
					</div> ";
				backBtn();
			} // endae LYDS_displayMSI function

/////// LYDS to LBS function ///////////////
		function LYDS_lbsComputation($value, $web, $yield) {
			if ($yield != 0) {
				$unitLBS = ($value*36*$web)/$yield; // computes unit LBS
				return $unitLBS = number_format($unitLBS, 4);
			}
			else { //				alert("YIELD");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLBS = 0;
			}
		} // endae LYDS_lbsComputation function 

		function LYDS_displayLBS($value, $web, $yield, $unitLBS) {
				echo "
					<div>
						<table id = 'resTable'>
							<thead><th><h1> Conversion from LYDS to LBS </h1></th></thead>
							<tbody>
								<tr> <td> Entered LYDS </td><td> $value </td></tr>
								<tr> <td> Entered Web </td><td> $web </td></tr>
								<tr> <td> Entered Yield </td><td> $yield </td></tr>
								<tr>
									<td> LBS </td> <td id = 'resAns'> $unitLBS </td>
								</tr>
							</body>
						</table>
					</div> ";
				backBtn();
			} // endae LYDS_displayLBS function

/////// LYDS to MFT function
		function LYDS_mftComputation($value) {
			$mftUnit = ($value*3)/1000;
			return $mftUnit = number_format($mftUnit, 4);
		} // endae LYDS_mftComputation function
	
		function LYDS_displayMFT($value, $unitMFT) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from LYDS to MFT </h1></th></thead>
						<tbody>
							<tr> <td> Entered LYDS </td><td> $value </td></tr>
							<tr>
								<td> MFT </td> <td id =  'resAns'> $unitMFT </td>
							</tr>
						</tbody>
					</table>
				</div>";
			backBtn();
		} // endae LYDS_displayMFT function


///////////////////// METERS FUNCTION CONVERSIONS ///////////////////////////////////////////

/////// METERS to M function //////////////////
		function METERS_mComputation($value, $repeat, $ipw) {
			if ($repeat != 0 && $ipw != 0) {
				$unitM =(($value*39.37)/$repeat*$ipw)/1000; // computes for M
				return $unitM = number_format($unitM, 4);
			} // endae IF
			else { //	alert("REPEAT AND IPW");
				echo "<script> javascript:history.go(-1) </script>";
				$unitM = 0;
			}
		} // endae METERS_mComputation function

		function METERS_displayM($value, $repeat, $ipw, $unitM) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from METERS to M </h1></th></thead>
						<tbody>
							<tr><td> Entered Meter </td><td> $value </td></tr>
							<tr><td> Entered IPW </td><td> $ipw </td></tr>
							<tr><td> Entered Repeat </td><td> $repeat </td></tr>
							<tr>
								<td> M </td>
								<td id = 'resAns'>$unitM</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // enae METERS_displayM function
	
/////// METERS to LFT function ///////////////////
		function METERS_lftComputation($value) {
			if ($value != 0) {
				$unitLFT =($value*39.37)/12; // computes LFT
				return $unitLFT = number_format($unitLFT, 4);
			} // endae IF
			else { //				alert('LFT');
				echo "<script> javascript:history.go(-1) </script>";
			} // endae ELSE
		} // edae METERS_lftComputation function
	
		function METERS_displayLFT($value, $unitLFT) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from METERS to LFT </h1></th></thead>
						<tbody>
							<tr><td> Entered Meter </td><td> $value </td></tr>
							<tr>
								<td> LFT </td> <td id = 'resAns'>$unitLFT</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		}
	
/////// METERS to LYDS function //////////////////
		function METERS_lydsComputation($value) {
			if ($value != 0) {
				$unitLYDS = ($value*39.37)/36; // computes LYDS
				return $unitLYDS = number_format($unitLYDS, 4);
			} // endae IF
			else { //				alert('LYDS');
				echo "<script> javascript:history.go(-1) </script>";
			}
		}
		function METERS_displayLYDS($value, $unitLYDS) {
			echo "
				<div>
					<table	id = 'resTable'>
						<thead><th><h1> Conversion from METERS to LYDS </h1></th></thead>
						<tbody>
							<tr><td> Entered Meter </td><td> $value </td></tr>
							<tr>
								<td> LYDS </td> <td id = 'resAns'>$unitLYDS</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		}
/////// METERS to MSI function ///////////////
		function METERS_msiComputation($value, $web) {
			if ($web != 0) {
				$unitMSI=($value*39.37*$web)/1000; // computes MSI
				return $unitMSI = number_format($unitMSI, 4);
			} // endae IF
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitMSI = 0;
			}
		} // endae METERS_msiComputation function
		function METERS_displayMSI($value, $web, $unitMSI) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from METERS to MSI </h1></th></thead>
						<tbody>
							<tr><td> Entered Meter </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr>
								<td> MSI </td> <td id = 'resAns'>$unitMSI</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae METERS_displayMSI function

		
/////// METERS to LBS function ///////////////
		function METERS_lbsComputation($value, $web, $yield) {
			if ($yield != 0) {
				$unitLBS = ($value*39.37*$web)/$yield; // computes LBS
				return $unitLBS = number_format($unitLBS, 4);
			} // endae IF
			else { //				alert("YIELD");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLBS = 0;
			}
		} // endae METERS_lbsComputation function 
		function METERS_displayLBS($value, $web, $yield, $unitLBS) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from METERS to LBS </h1></th></thead>
						<tbody>
							<tr><td> Entered Meter </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr><td> Entered Yield </td><td> $yield </td></tr>
								<td> LBS </td> <td id = 'resAns'>$unitLBS</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae METERS_displayLBS function
//////  METERS to MFT function 
		function METERS_mftComputation($value) {
			$mftUnit = ($value/1000)/(0.3048);
			return $mftUnit = number_format($mftUnit, 4);
		} // endae METERS_mftComputation function
		function METERS_displayMFT($value, $unitMFT) {
			echo "
				<div>
					<table	id = 'resTable'>
						<thead><th><h1> Conversion from METERS to MFT </h1></th></thead>
						<tbody>
							<tr><td> Entered Meter </td><td> $value </td></tr>
							<tr>
								<td> MFT </td> <td id = 'resAns'>$unitMFT</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae METERS_displayMFT function

///////////////////// MSI FUNCTION CONVERSIONS //////////////////////////////////////////////

////// MSI to M functions
		function MSI_mComputation($value, $web, $repeat, $ipw) {
			if ($web != 0 && $repeat != 0) {
				$unitM =($value*$ipw)/($web*$repeat); // computes M
				//				NOTE : MISSING NUMBER ACROSS! MUST CHECK FORMULA VALIDITY!
				return $unitM = number_format($unitM, 4);
			} // endae IF
			else { //				alert("REPEAT AND WEB");
				echo "<script> javascript:history.go(-1) </script>";
				$unitM = 0;
			} // endae ELSE
		} // endae MSI_mComputation function
		function MSI_displayM($value, $web, $repeat, $ipw, $unitM) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from MSI to M </h1></th></thead>
						<tbody>
							<tr><td> Entered MSI </td><td> $value </td></tr>
							<tr><td> Entered IPW </td><td> $ipw </td></tr>
							<tr><td> Entered Repeat </td><td> $repeat </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr>
								<td> M </td> <td id = 'resAns'>$unitM</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae MSI_displayM  function

////// MSI to LFT functions
		function MSI_lftComputation ($value, $web) {
			if ($web != 0) {
				$unitLFT=($value*1000)/$web/12; // computes for LFT
				return $unitLFT = number_format($unitLFT, 4);
			} // endae IF
			else { //				alert("WEB");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLFT = 0;
			}
		} // endae MSI_lftComputation function
		function MSI_displayLFT($value, $web, $unitLFT) {
				echo "
					<div>
						<table id = 'resTable'>
							<thead><th><h1> Conversion from MSI to LFT </h1></th></thead>
							<tbody>
								<tr><td> Entered MSI </td><td> $value </td></tr>
								<tr><td> Entered Web </td><td> $web </td></tr>
								<tr>
									<td> LFT </td>
									<td id = 'resAns'>$unitLFT</td>
								</tr>
							</tbody>
						</table>
					</div> ";
				backBtn();
			} // enda MSI_displayLFT function

////// MSI to LYDS functions
		function MSI_lydsComputation ($value, $web) {
			if ($web != 0) {
				$unitLYDS=($value*1000)/$web/36; // computes for LYDS
				return $unitLYDS = number_format($unitLYDS, 4);
			}
			else { //				alert("WEB");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLYDS = 0;
			}
		} // endae MSI_lydsComputation function
		function MSI_displayLYDS($value, $web, $unitLYDS) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from MSI to LYDS </h1></th></thead>
						<tbody>
							<tr><td> Entered MSI </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr>
								<td> LYDS </td>
								<td id = 'resAns'>$unitLYDS</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // enda MSI_displayLYDS function

////// MSI to LBS functions
		function MSI_lbsComputation ($value, $yield) {
			if ($yield != 0) {
				$unitLBS=$value*1000/$yield; // computes LBS
				return $unitLBS = number_format($unitLBS, 4);
			} // endae IF
			else { //				alert("YIELD");
				echo "<script> javascript:history.go(-1) </script>";
				$unitLBS = 0;
			} // endae ELSE
		} // endae MSI_lftComputation function
		function MSI_displayLBS($value, $yield, $unitLBS) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from MSI to LBS </h1></th></thead>
						<tbody>
							<tr><td> Entered MSI </td><td> $value </td></tr>
							<tr><td> Entered Yield </td><td> $yield </td></tr>
							<tr>
								<td> LBS </td><td id = 'resAns'>$unitLBS</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // enda MSI_displayLBS function
	
////// MSI to MFT functions
		function MSI_mftComputation($value, $web) {
				if ($value > (-1)) {
					$mftUnit = ($value/12)/($web);
					return $mftUnit = number_format($mftUnit, 4);
				}
				else {
					echo "<script> javascript:history.go(-1) </script>";
				}
			} // endae MSI_mftComputation function
	
		function MSI_displayMFT($value, $web, $unitMFT) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from MSI to MFT </h1></th></thead>
						<tbody>
							<tr><td> Entered MSI </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr>
								<td> MFT </td>
								<td id = 'resAns'>$unitMFT</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae MSI_displayMFT function 


////////////////// LBS FUNCTION CONVERSIONS ///////////////////

/////// LBS to  M function
		function LBS_mComputation($value, $lbsm) {
			if ($lbsm != 0) {
				$unitM =($value)/$lbsm; // computes M
				return $unitM = number_format($unitM, 4);
			} // endae IF
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitM = 0;
			}
		} // endae LBS_lbsmComputation function

		function LBS_displayM($value, $lbsm, $unitM) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from LBS to M </h1></th></thead>
						<tbody>
							<tr><td> Entered LBS </td><td> $value </td></tr>
							<tr><td> Entered LBS/M </td><td> $lbsm </td></tr>		
							<tr>
								<td> M </td> <td id = 'resAns'>$unitM</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae LBS_displayM function 

/////// LBS to LFT function
		function LBS_lftComputation($value, $yield, $web) {
			if ($web != 0) {
				$unitLFT =($value*$yield)/$web/12; // computes LFT
				return $unitLFT = number_format($unitLFT, 4);
			} // endae IF
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitLFT = 0;
			}
		} // endae LBS_lftComputation function

		function LBS_displayLFT ($value, $yield, $web, $unitLFT) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from LBS to LFT </h1></th></thead>
						<tbody>
							<tr><td> Entered LBS </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr><td> Entered Yield </td><td> $yield </td></tr>
							<tr>
								<td> LFT </td> <td id = 'resAns'>$unitLFT</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae LBS_displayLFT function 

/////// LBS to LYDS function
		function LBS_lydsComputation($value, $yield, $web) {
			if ($web != 0) {
				$unitLYDS =($value*$yield)/$web/36; // computes LFT
				return $unitLYDS = number_format($unitLYDS, 4);
			} // endae IF
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitLYDS = 0;
			} // endae ELSE
		} // endae LBS_lftComputation function

		function LBS_displayLYDS ($value, $yield, $web, $unitLYDS) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from LBS to LYDS </h1></th></thead>
						<tbody>
							<tr><td> Entered LBS </td><td> $value </td></tr>
							<tr><td> Entered Web </td><td> $web </td></tr>
							<tr><td> Entered Yield </td><td> $yield </td></tr>
							<tr>
								<td> LYDS </td> <td id = 'resAns'>$unitLYDS</td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae LBS_displayLYDS function

/////// LBS to MSI function
		function LBS_msiComputation($value, $yield) {
			if ($yield != 0) {
				$unitMSI =($value*$yield)/1000; // computes MSI
				return $unitMSI = number_format($unitMSI, 4);
			} // endae IF
			else {
				echo "<script> javascript:history.go(-1) </script>";
				$unitMSI = 0;
			}
		} // endae LBS_msiComputation function

		function LBS_displayMSI ($value, $yield, $unitMSI) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from LBS to MSI </h1></th></thead>
						<tbody>
							<tr><td> Entered LBS </td><td> $value </td></tr>
							<tr><td> Entered Yield </td><td> $yield </td></tr>
							<tr>
								<td> MSI </td> <td id = 'resAns'>$unitMSI</td>
							</tr>
					</table>
				</div> ";
			backBtn();
		} // endae LBS_displayMSI function
	
	////// LBS to MFT function

	



///////////////// MFT FUNCTION CONVERSIONS ///////////////////////////////////////////
		
/////// MFT to M function
		function MFT_mComputation($value, $repeat, $ipw) { 
			if($value > 0) { 
				$mUnit = $value*((12/$repeat)*$ipw);
				// $mUnit = ($inches/1000);
				return $mUnit = number_format($mUnit, 4); 
			} // endae IF
			else { 
				echo "<script> javascript:history.go(-1) </script>";
			} // endae ELSE
		} // endae MFT_mComputation function
		
		function MFT_displayM($value, $mUnit, $repeat, $ipw) {
			echo "
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from MFT to M </h1></th></thead>
						<tbody>
							<tr><td> Entered MFT </td><td> $value</td></tr>
							<tr><td> Entered Repeat </td><td> $repeat</td></tr>
							<tr><td> Entered IPW </td><td> $ipw</td> </tr>
							<tr>
								<td> M </td> <td id =  'resAns' > $mUnit </td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		}
	
/////// MFT to LFT function
		function MFT_lftComputation($value) {
			$lftValue = $value*1000;
			return $lftValue = number_format($lftValue, 4);
		} // endae MFT_lftComputation function
	
		function MFT_displayLFT($value, $unitLFT) {
			echo "	
				<div>
					<table id = 'resTable'>
						<thead><th><h1> Conversion from MFT to LFT </h1></th></thead>
						<tbody>
							<tr><td> Entered MFT </td><td> $value</td></tr>
							<tr>
								<td> LFT </td> <td id = 'resAns'> $unitLFT </td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // enade MFT_displayLFT function
	
/////// MFT to LYDS function
		function MFT_lydsComputation($value) {
			if ($value < 0) {
				echo "<script> javascript:history.go(-1) </script>";
			}
			else {
				$unitLYDS = (($value*1000)/3);
				return $unitLYDS = number_format($unitLYDS, 4);
			}
		} // endae MFT_lydsComputation function
	
		function MFT_displayLYDS($value, $unitLYDS) {
			echo "
				<div>
					<table id = 'resTable' >
						<thead><th><h1> Conversion from MFT to LYDS </h1></th></thead>
						<tbody>
							<tr><td> Entered MFT </td><td> $value</td></tr>
							<tr>
								<td> LYDS </td> <td id = 'resAns' > $unitLYDS </td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae MFT_display function
		
/////// MFT to METERS function
		function MFT_metersComputation($value) {
			if ($value < 0) {
				echo "<script> javascript:history.go(-1) </script>";
			}
			else {
				$unitMETERS = ($value*1000)*.3048;
				return $unitMETERS = number_format($unitMETERS, 4);
			}
		} // endae MFT_metersComputation function
	
		function  MFT_displayMETERS($value, $unitMETERS) {
			echo "
				<div>
					<table id = 'resTable' >
						<thead><th><h1> Conversion from MFT to METERS </h1></th></thead>
						<tbody>
							<tr><td> Entered MFT </td><td> $value</td></tr>
							<tr>
								<td> METERS </td> <td id = 'resAns' > $unitMETERS </td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		} // endae MFT_displayMETERS function 
	
/////// MFT to MSI function
		function MFT_msiComputation($value, $web) {
			$unitMSI = ($value * 12) * $web;
			return $unitMSI = number_format($unitMSI, 4);
		} // endae MFT_msiComputation function
	
		 function MFT_displayMSI($value, $web, $unitMSI) {
			echo "	
				<div>
					<table id = 'resTable' >
						<thead><th><h1> Conversion from MFT to MSI </h1></th></thead>
						<tbody>
							<tr><td> Entered MFT </td><td> $value</td></tr>
							<tr><td> Entered Web </td><td> $web</td></tr>
							<tr>
								<td> MSI	</td> <td id = 'resAns' > $unitMSI </td>
							</tr>
						</tbody>
					</table>
				</div> ";
			backBtn();
		 } // endae MFT_displayMSI function
	
/////// MFT to LBS function
//		function MFT_lbsComputation($value) {} // endae MFT_lbsComputation function
	
//		function MFT_displayLBS($value, $unitLBS) {} // endae MFT_displayLBS function
	
	function format($ab, $ad) {
		echo "<h2>Conversion from $ab to $ad </h2>
			<div>		
		";
	}
	
	function description($description, $descVal) {
	//		$descVal = number_format($descVal, 4, '.', ',');
		echo "<p id = 'resP'> Entered $description : $descVal </p>";
	}
	
	function tableFormat() {
		echo "<table id = 'resTable'>";
	}
	
	function tablePreview($desc, $unitResult) {
		echo "
			<tr >
				<td > $desc </td>
				<td id = 'resAns'>$unitResult</td>
			</tr>
		";
	}
	
	function tableEndFormat() {
		echo "</table>";
	}
	
	

		?>
	
	
	
	<br><br><br><br>
	<div id = 'linkDiv'>
		<label id = 'links'>
			<a id = 'bomID' href = 'BOMCalcRevised.php' > BOM Calculator</a> 
		</label>
		<label id = 'links' >
			<a href = 'RollLengthCalculator.php' > Roll Length</a> 
		</label>
		<label id = 'links'> 
			<a href = 'corrlayouts.php' > Box Layouts</a> 
		</label>
	</div>

	
	
	</body>
</html>