<!DOCTYPE html>
<html>
<head>
    <title>check_admin</title>
</head>
<body>

<?php

    
    $var1 = $_POST['u_name'];
    $var2 = $_POST['p_word'];

    //echo "".$var1." ads".$var2."";


    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $query = "
            select *
            from is_admin('$var1','$var2')
        ";



    $result =  pg_query($db_connection, $query);


    $row = pg_fetch_array($result);


    $ans=$row[0]; 

    //echo "".$ans."";

    if($ans == 1){
        header("Location:home_admin.php");
        //<a href="cup_details.php" target="_blank"></a>
    }
    else
        echo "Login Unsuccessful";



    
    ?>

</body>
</html>
