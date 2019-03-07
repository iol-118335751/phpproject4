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

h3 {

	font-family: Candara, sans-serif;
	font-size: 30px ;
	border: 3px solid #9370DB;
	}
	
Name: {

	font-family: Candara, sans-serif;
	font-size: 20px ;
	border: 3px solid #9370DB;
	}
	

body { 
       background-image: url("images/backgroundinterests.jpg");
	   font: forte;
	   
  }
	
	
	
</style>
	<title>Confirmation</title>
	</head>
	
	<body>
	<ul>
		  <li><a  href="EbusHome.html">Home</a></li>
		  <li><a href="AboutUs.html">About Us</a></li>
		  <li><a class="active" href="Research.html">Research Page</a></li>
		  <li><a href="UsefulLinks.html">Useful Links</a></li>
		  <li class="dropdown">
			<a href="#" class="dropbtn">Ebusiness Pages</a>
			<div class="dropdown-content">
			  <a href="Ebus1.php">Online Banking Interest Calculator</a>
			  <a href="Ebus2.php">Customer Details</a>
			  <a href="Ebus3.php">Free Online Banking Check</a>
			
			</div>
		  </li>
		  <li><a href="Homepage.html">Back to Personal Site</a></li>
		</ul>

	
	    <center>
		     <h3> Customer Details </h3>
			 
			 <br />
			 Name: &nbsp; <?php echo $_POST("name"); ?><br /> <!--The value returned into the name text box is the CustomerPaymentDetails form on Ebusiness2.php is printed-->
             Email: &nbsp; <?php echo $_POST("Email"); ?><br /> <!--The value entered into the Email text box in the CustomerPaymentDetails form on Ebusiness2.php is printed-->
             <br />

             <h3> Purchase Information </h3>
             <br /><!--The cookie value was stored on Ebus2.php from the data calulated on Ebus1.php-->
             Total Price: &nbsp; <?php echo $_COOKIE("Total"); ?><!--The total value is printed by php-->

         </center>

     </body>
</html>	 