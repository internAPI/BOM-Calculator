<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LBS BOM</title>
<link href="Styles/LBSStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
	<form method = 'POST' action ='BOMCalcRevised.php' >
		<h1 id = 'header1'>BOM for LBS</h1>
		<div id = 'divID'>
			<h4 id='header4'> <b id = 'bold' >*</b>Cannot Be Zero<b id = 'bold'>*</b> </h4>

			<p>
				<label for = 'web'> Film Size </label>
			</p>
			<p>
				<input type= 'number' placeholder = 'Enter' name = 'web' value = '' maxlength = '14' autofocus onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
			</p>

			<p>
				<label for = 'yield'> <b id = 'bold' >*</b>Yield 1 / Film 1</label>
			</p>
			<p>
				<input type= 'number' placeholder = 'Enter' name = 'yield' value = '' maxlength = '14'  onChange='setDecimal(this)'step = '.0001' autocomplete='off' />
			</p>
		</div>
		<p>
			<button id = 'addFilmID' type='button' name = 'clicker' onClick="main(counter());
			" value = 'counter()'> Add Film </button> 
			<input id = 'filmTrackerID' type ='number' name = 'filmTracker' value = '1'/>
			<script>
				function setDecimal(val) {
					val.value = parseFloat(val.value).toFixed(4);
				}
			</script>

			<input id = 'lbsID' name='LBS' value='LBS'/>
		</p>
		<br>
		<div> 
			<label for = 'submit'>
				<button id = 'sub' type = 'submit' name = 'submit' value = 'Calculate'> Calculate </button>
				<button id = 'sub' type = 'reset' name = 'reset' value = 'Clear'> Clear </button>
			</label>
		</div>
	</form>	



	<script>
	// Counter is kept to track number of films present
		// Will ++ when add button is pressed and -- when remove Film button is pressed. 
		var count = 1;
		var notif = "<p id = 'notifID'> ** Remove Most Recently Added Film First! ** </p>";
		var d1 = document.getElementById('divID');
		function counter() {
			count=parseInt(count+parseInt(1));
			document.getElementById('filmTrackerID').value = count;
			return count;
		}
		
		function decounter() {
			count=parseInt(count-parseInt(1));
			document.getElementById('filmTrackerID').value = count;
			return count;
		}
		
		var decount = 0;
		function setDecount(decount) {
			this.decount = decount;
		}
		
		function getDecount() {
			return decount;
		}
		
		function main(count) {
			if (count > 4) {
				alert("Cannot have more than 4 Yields/Films!");
			}
			else {
				if (count == 3) {
					d1.insertAdjacentHTML('afterend', notif);
				}
				
				if (getDecount() == 1) {
					notif.style.display = 'none';
				}
				
				var newContent = newFilm(count);
				var newButton = newRemButton(count);

				d1.insertAdjacentHTML('beforeend', newContent);
				d1.insertAdjacentHTML('beforeend', newButton);
				
				function newFilm(count) {
					var content = "<p id='filmP"+count+"'> <label id='yieldLbl"+count+"' for = yield"+count+"> <b id = 'bold'>*</b>Yield "+count+" / Film "+count+"</label></p> <p id = 'filmPP"+count+"'> <input id = 'yieldBtn"+count+"'type= 'number' placeholder = 'Enter' name = 'yield"+count+"' value = '' maxlength = '14' onChange='setDecimal(this)'step = '.0001' autocomplete='off' /> </p>";
					return content;
				} // endae newFilm nested function

				function newRemButton(count) {
					var remButton = "<button class = 'remBut' id='remove"+count+"' type='button' name = 'removeclicker' onClick='removeFilm("+count+"); decounter(); setDecount(this.value)' value = 'decounter()'> Remove Film "+count+" </button>";
					return remButton;
				} // endae newRemButtonn nested function
			}
		} // endae main function
		
		function removeFilm(count) {
			var parent = document.getElementById('divID');
			var nodeRem = document.getElementById('remove'+count);
			var nodeP = document.getElementById('filmP'+count);
			var nodeP1 = document.getElementById('filmPP'+count);
			parent.removeChild(nodeP);
			parent.removeChild(nodeP1);
			parent.removeChild(nodeRem);
		} // endae removeFilm function
	</script>
	
			
</body>
</html>