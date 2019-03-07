<!DOCTYPE html>

<?php //This will save the value of the total as a cookie 

		//so that it can be accessed on Ebus3.php.

		setcookie("Total", $_POST['Total'], time() +86400);

               
?>

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
    display: inlinenme-block;
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

h3 {

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
		<title> Customer Payment Details </title>		

	  <script>
		function validate_form()
		{
			valid = true;
				if(document.CustomerPaymentDetails.name.value=="")
				{
					window.alert("Please fill in Name.");
					valid = false;
				}
				else if(document.CustomerPaymentDetails.Mobile.value=="")
				{
					window.alert("Please fill in Mobile.");
					valid = false;
				}
				else if(document.CustomerPaymentDetails.Password.value=="")
				{
					window.alert("Please fill in Password Number.");
					valid = false;
				}
		
				else if(isNaN(document.CustomerPaymentDetails.Password.value))
				{
					window.alert("Please use numbers only for Password Number.");
					valid = false;
				}
			return valid;
		}
	  </script>
 
	  </head>
	
		  <body>
		 
		  
		  
		  
		  <form name="CustomerPaymentDetails" action="Ebus3.php" 
		  onsubmit="return validate_form();" method="post">
		  <!--When this form is submitted by the user clicking
		  the Validate/Proceed with Purchase button,
		  the Javascript function validate_form(); is called-->
		
			<center><h3> Please enter your payment details </h3>
			<br />
			<table cellspacing="10">
			<tr>
				<td>Name:</td><td><input type="text" id="names" name="name"/></td>
			</tr>
			<tr>
				<td>Mobile:</td><td><input type="text" name="Mobile" /> </td>
			</tr>
			<tr>
				<td>Password:</td><td><input type="Password" name="Pin_Number"  pattern="[0-9]{4}" title="Four Digit Pin" /> 
                               
                                </td>
			</tr>
			</table>
			<br />
			<input type="submit" value="Validate/Proceed with Purchase" />
			<!--When the user clicks this button, this calls the function 
			validate_form(); and if the value of valid returned is true they will be 
			able to move on to EBus3.php-->
			</center>
		</form>
		</body>
		</html>
			
		