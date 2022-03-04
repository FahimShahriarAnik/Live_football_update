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
<!----
     <h3>Add favourite team</h3>
    <form method="post" action="add_favourite.php">
         Favourite team id: <input type="number" name="fid"><br>
  <input type="submit" value="Submit">
  </form>
------>
<?php
	
	$db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik");


    $var1 = $_POST['u_name'];
    $var2 = $_POST['email'];
    $var3 = $_POST['p_word'];

    //echo $var1;
    //echo $var2;
    //echo $var3;
    //echo $var4;

    //concat_ws (', ',goal_min,'')

    $queryyy ="

            insert into userprofile(name,email,password) values ('$var1','$var2','$var3');
 
        ";    

    $resulteee =  pg_query($db_connection, $queryyy); 

    //echo "signed up successfully";






    


?>


   
</body>
</html>