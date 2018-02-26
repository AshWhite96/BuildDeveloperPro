<?php
   session_start();
?>

<script type="text/javascript">
	var a,b,result,squarem;

	function setValues(){

		a = Number(document.getElementById("num1").value);
		b = Number(document.getElementById("num2").value);
		squarem = a*b;
	}

	function BrickCalc(){
		setValues();
		result = squarem * 0.006;
		wastage = 10/100*result; 
		grandresult = wastage + result;
		document.getElementById('brickdetails').innerHTML = "";
		alert("The amount of bricks required is "+ result.toFixed(0) + "\nAdditionally the amount of wastage (10%) would be: "+ wastage.toFixed(2) + "\nTherefore the approximate amount required is: " + grandresult.toFixed(0));
		document.getElementById('brickdetails').innerHTML += '<hr>The amount of bricks required is: <strong>'+ result.toFixed(0) +'</strong>'+ 
														'<br>Additionally the amount of wastage (10%) would be: <strong>'+wastage.toFixed(0)+'</strong>'+
														'<br>Therefore the approximate amount required is: <strong>'+grandresult.toFixed(0)+'</strong>';


	}

	function MortarCalc(){
		setValues();
		result = squarem * 0.006;
		cementresult = result * 0.25;
		cementbags = cementresult / 50;
		alert("The amount of cement required is: "+cementresult.toFixed(2)+"KG"+"\n Which equates to : "+ cementbags.toFixed(2)+" bags (50kg)"+ "\nThe amount of sand required is: "+result.toFixed(2)+"KG");
		document.getElementById('details').innerHTML += '<hr>The amount of bricks required is: '+ cementresult;
	}

	function PlasterCalc(){
		setValues();
		bagamount = squarem / 7500;
		kiloamount = bagamount * 25;
		alert("The amount of plaster required is: "+kiloamount.toFixed(2)+"KG"+"\n Which equates to: "+bagamount.toFixed(2)+" bags (25kg). \nThis is at a 12mm thickness.");
	}

	function BoardCalc(){
		setValues();
		boardamount = squarem / 28800;
		alert(boardamount.toFixed(1));
		
	}

	function PaintCalc(){

	}


</script>


<!--<div class="container col-md-12">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Calculator</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">Panel Body
			<form>
					<input type="text" id="num1" placeholder="Height(cm)">
					<input type="text" id="num2" placeholder="Width (cm)">
					<input type="button" onclick="BrickCalc()" value="Brick Calculator"/>
					<input type="button" onclick="MortarCalc()" value="Mortar Calculator"/>
					<input type="button" onclick="multi()" value="multi"/>
					<input type="button" onclick="div()" value="div"/>
				</form>




        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>
  </div>
</div>-->
	



	<br>
	
