<script type="text/javascript">
	var a,b,result,squarem;

	function setValues(){
		a = Number(document.getElementById("num1").value);
		b = Number(document.getElementById("num2").value);

	}
	function BrickCalc(){
		setValues();
		squarem = a*b;
		result = squarem * 60;
		wastage = 10/100*result; 
		grandresult = wastage + result; 
		alert("The amount of bricks required is "+ result + " Additionally the amount of wastage (10%) would be: "+ wastage + " Therefore the approximate amount required is: " + grandresult);
	}

	function minus(){
		setValues();
		result = a-b;
		alert("The value is equal to "+result );
	}

	function multi(){
		setValues();
		result = a*b;
		alert("The multiplication is equal to "+result );
	}

	function div(){
		setValues();
		result = a/b;
		alert("The divide is equal to "+result );
	}


	
</script>




<form>
	<input type="text" id="num1" placeholder="Height(m)">
	<input type="text" id="num2" placeholder="Width (m)">
	<input type="button" onclick="BrickCalc()" value="Brick Calculator"/>
	<input type="button" onclick="minus()" value="minus"/>
	<input type="button" onclick="multi()" value="multi"/>
	<input type="button" onclick="div()" value="div"/>




	<br>
	
</form>

<?php
	/*if(isset($_GET['submit'])){
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];

		switch ($operator) {
			case "None":
				echo "ERROR, You Need to Select a Method!";
				break;
			case "Add":
				echo $result1 + $result2;
				break;
			case "Subtract":
				echo $result1 - $result2;
				break;
			case "Multiply":
				echo $result1 * $result2;
				break;
			case "Divide":
				echo $result1 / $result2;
				break;

			
			default:
				# code...
				break;
		}
	}*/
?>