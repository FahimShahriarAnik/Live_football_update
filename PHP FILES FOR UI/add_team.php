<!DOCTYPE html>
<html>
<head>
    <title>check_admin</title>
</head>
<body>

<?php

    
    $var1 = $_POST['tid'];
    $var2 = $_POST['tname'];
    $var3 = $_POST['count'];
    $var4 = $_POST['net'];

    //echo "".$var1." ads".$var2."";


    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $query = "
            insert into public.team values($var1,'$var2','$var3',$var4,101);
        ";



    $result =  pg_query($db_connection, $query);


    $row = pg_fetch_array($result);

    header("Location:team_details_admin.php");


    $ans=$row[0]; 

    //echo "".$ans."";

/*
    if($ans == 1){
        header("Location:home_admin.php");
        //<a href="cup_details.php" target="_blank"></a>
    }
    else
        echo "Login Unsuccessful";

*/

    
    ?>

</body>
</html>
