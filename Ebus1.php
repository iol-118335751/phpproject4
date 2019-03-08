<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>


<!DOCTYPE html>

<html>

<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: pink ;
	font-family: 'Sigmar One', cursive;
	
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black ;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-family: 'Sigmar One', cursive;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: lightblue ;
}

li.dropdown {
    display: inline-block;
	
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: 9370DB;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	font-family: 'Sigmar One', cursive;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	font-family: 'Sigmar One', cursive;
}

.dropdown-content a:hover {background-color: 9370DB }

.dropdown:hover .dropdown-content {
    display: block;
}

h1 {

	font-family: Candara, sans-serif;
	font-size: 50px ;
	border: 10px solid #9370DB;
	}
	
td {

	font-family: Candara, sans-serif;
	font-size: 20px ;
	border: 3px solid #9370DB;
	}
	
	


	
	
	
</style>
<script language="Javascript">

        function calcSub()
		{
		
		var A,
		    B,
			C,
                        D;
			
	    /*----------------A Check Box--------------------*/
		if(document.addform.chkbox1.checked == true)
		{
		
		A = 1000;
		
		}
		
		else{
		A = 0;
		}
		
	    /*---------------B Check Box--------------------*/
		if(document.addform.chkbox2.checked == true)
		{
		
		B = 2000;
		
		}
		
		else{
		B = 0;
		}
		
		/*----------------C Check Box--------------------*/
		if(document.addform.chkbox3.checked == true)
		{
		
		C = 3000;
		
		}
		
		else{
		C = 0;
		}
		

	
	
	    subTotal = A + B + C ;
		calcDisTotal(subTotal); 
		 
		}
		 
		 
		function calcDisTotal(parm1)
		{
		var subTotal;
		var discountAmt;
		var vatAmt;
		var totalPrice;
		
		
		subTotal = parm1;
		
		discountAmt = subTotal*0.1;
		
		vatAmt= subTotal*0.2;
		
		totalPrice = (subTotal - discountAmt + vatAmt);

        display(subTotal,discountAmt,vatAmt,totalPrice);
			
		}
		
		function display(parm2,parm3,parm4,parm5)
        {
		  	  
		document.addform.displaynet.value=parm2;
		document.addform.displaydiscount.value=parm3;
		document.addform.displayvat.value=parm4;
		document.addform.Total.value=parm5;
		
		}
	</script>
		
					

</head>

    <body>
	

	     <h1>Select a Consulting Service</h1>
		 
		 <form name="addform" method="post" action="Ebus2.php">
		 
		    <table align =" center" border =" 0" width = 80%>
			
			<tr>
			   <td><input type = "checkbox" name = "chkbox1" >Blockchain - $1000</td>
			</tr> 
			
			<tr>
			   <td><input type = "checkbox" name = "chkbox2">Autonomous Things - $2000</td>
			</tr>
			
			<tr>
			   <td><input type = "checkbox" name = "chkbox3">Immersive Experience - $3000</td>
			</tr>
			
		
			
			
			<tr>
			    <td><strong>Cost</strong></td>
			</tr>

            <tr>
               <td>Sub Total</td>
               <td><center><input type = "text"	name="displaynet"></td>
            </tr>

            <tr>
              <td>Discount Amount(@10%)</td>
              <td><center><input type = "text" name="displaydiscount"></td>
			</tr>

            <tr>
              <td>VAT Amount(@20%)</td>
              <td><center><input type = "text" name="displayvat"></td>
            </tr>

            <tr>
              <td>Total Price (- discount + vat)</td>
              <td><center><input type = "text" name="Total"></td>
            </tr>

            </table>

            <br>
  
              <center>
			  <input type = "button" name = "Calculate Cost"
			  value ="Calculate cost" onclick ="calcSub();">
			  <input type = "reset" value = "Clear Choice">
			  <input type = "submit" value= "Add to shopping cart" >
			  </center>
			  
		
		
            
            
			   </header>
   
		 
		</form>
	
	</body>
</html>
