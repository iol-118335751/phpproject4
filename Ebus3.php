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




li a:hover, .dropdown:hover .dropbtn {
    background-color: lightblue ;
}

li.dropdown {
    display: inline-block;
	
}



.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	font-family: 'Sigmar One', cursive;

        {
	font-family: Candara, sans-serif;
	font-size: 30px ;
	border: 3px solid #9370DB;
	}
	
Name:   {

	font-family: Candara, sans-serif;
	font-size: 20px ;
	border: 3px solid #9370DB;
	}
		
</style>
	<title>Confirmation</title>
	</head>
	
	<body>
	<ul>
		
			</div>
		  </li>
		  <li><a href="Index.php">Back to Personal Site</a></li>
		</ul>

	
	    <center>
		     <h3> Customer Details </h3>
			 
			 <br />
                         
			 Name: &nbsp; <?php echo filter_input(INPUT_POST, 'name'); ?><br /> 
             Mobile: &nbsp; <?php echo filter_input(INPUT_POST, 'Mobile'); ?><br /> 
             <br />

             <h3> Purchase Information </h3>
             <br />
             Total Price: &nbsp; <?php echo filter_input(INPUT_COOKIE, 'Total'); ?>

         </center>

     </body>
</html>	 