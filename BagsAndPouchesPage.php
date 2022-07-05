<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wickets/Bags/Zipper</title>
<link href="Styles/BagsAndPouchStyle.css" rel="stylesheet" type="text/css">
	
	<script>
		function validateForm(forms) {
			var bag = document.forms['form']['bagppack'].value;
			var box = document.forms['form']['bagpbox'].value;
			var repeat = document.forms['form']['bagrepeat'].value;
			var strip = document.forms['form']['strips'].value;
			if (bag !='' && box !='' && repeat == '' && strip == '') {
				continue;
			}
			else if (bag !='' && box !='' && repeat == '' || strip == '') {
				document.getElementById('h4').style.visibility = 'visible';
				forms.preventDefault();
				return false;
			}
			else {
				return true;
			}
		}
	</script> 
	
</head>
	
<body id = 'mainBody'>
	
	<form id = 'mainForm' name='form' method='POST' onSubmit = 'return validateForm(this); return false'action='BOMCalcRevised.php' >
		<h1 id = 'header1'>Bags and Pouches BOM</h1>
		<p>
			<b id = 'bold'> * </b>CANNOT BE ZERO!<b id = 'bold'>* </b>
		</p>
		<p>
			<label for = 'bagppack'> <b id = 'bold'>*</b> Enter # of bags per pack:</label> 
			<input id = 'inputs' type= 'number' name = 'bagppack' placeholder = 'Enter' value =''  maxlength = '14' autocomplete='off' onChange='setDecimal(this);'step = '.0001' autofocus autocomplete='off' />
		</p>
		<p>	
			<label for = 'bagpbox'><b id = 'bold'>*</b> Enter # of bags per box:</label>
			<input type= 'number' name = 'bagpbox' placeholder = Enter value = '' maxlength = '14' autocomplete='off' onChange='setDecimal(this);'step = '.0001' autofocus autocomplete='off' />
		</p>

		<h1 id = 'header2'> Calculate for Zipper and/or Tape</h1>
<!--		<h4 id = 'h4'>** Number of Strips per bag and Repeat fields must be filled!**</h4>-->
			
		<p>
			<label for = 'bagrepeat'>Enter Repeat (inches):</label>
			<input id = 'inputs' type= 'number' name = 'bagrepeat' placeholder = Enter value = '' maxlength = '14' autofocus onChange='setDecimal(this); 'step = '.0001' autocomplete='off' />

		</p>
		<P>
			<label for = 'strips'>Number of strips per bag:</label>
			<input id = 'inputs' type= 'number' name = 'strips' placeholder = Enter value = '' maxlength = '14' onChange='setDecimal(this);'step = '.0001' autocomplete='off' />
		</p>

		<script>
			function setDecimal(val) {
				val.value = parseFloat(val.value).toFixed(4);
			}
			
		</script>
				
		<br>
		<div> 
			<label for = 'submit'>
				<button id = 'sub' type = 'submit' name = 'submit' value = 'Calculate'> Calculate </button>
				<button id = 'sub' type = 'reset' name = 'reset' value = 'Clear'> Clear </button>
			</label>
		</div>
		<input name='BAGSPOUCH' style='display:none' value='BAGSPOUCH'/>

	</form>
	
	
</body>
	
	
	
	
</html>