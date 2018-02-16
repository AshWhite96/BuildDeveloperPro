<script type="text/javascript">
	var a,b,result,squarem;

	function setValues(){
		a = Number(document.getElementById("num1").value);
		b = Number(document.getElementById("num2").value);

	}
	function BrickCalc(){
		setValues();
		squarem = a*b;
		result = squarem * 0.006;
		wastage = 10/100*result; 
		grandresult = wastage + result; 
		alert("The amount of bricks required is "+ result + "\nAdditionally the amount of wastage (10%) would be: "+ wastage + "\nTherefore the approximate amount required is: " + grandresult);
	}

	function MortarCalc(){
		setValues();
		squarem = a*b;
		result = squarem * 0.006;
		cementresult = result * 0.25;
		cementbags = cementresult / 50;
		alert("The amount of cement required is: "+cementresult+"KG"+"\n Which equates to : "+ cementbags+" bags (50kg)"+ "\nThe amount of sand required is: "+result+"KG");
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
	
