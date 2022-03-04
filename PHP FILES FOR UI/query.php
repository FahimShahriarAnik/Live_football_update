<!DOCTYPE html>
<html>
<head>
    <title>signed up</title>
</head>
<body>
    <h1 align="center">Signed up successfully</h1>
    <br>
    <br>
  <br>

    <h3>finds players who get the highest salary</h3>
    <form method="post" action="cm_query4.php">
  <input type="submit" value="Submit">
  </form>



     <h3>shows every team with it's players</h3>
    <form method="post" action="cm_query5.php">
  <input type="submit" value="Submit">
  </form>



<?php


	
	$db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik");





    


?>


   
</body>
</html>