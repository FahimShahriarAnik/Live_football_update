<!DOCTYPE html>
<html>
<head>
    <title>Favourite</title>
</head>
<body>
    <h1 align="center">Info of Your favourite Teams</h1>
    <br>
    <br>
    <br>


    <h3>Watch matches played by a team</h3>
    <form method="post" action="matches_played.php">
         Team Name: <input type="text" name="tname"><br>
    <input type="submit" value="Submit">
    </form>
    
    
    <?php

    $var1 = $_POST['fname'];
    //echo $var1;
    $var2 = $_POST['lname'];
    //echo $var2;

    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $query = "
            select user_id
            from public.userprofile
            where name='$var1' and password='$var2';
        ";



    $result =  pg_query($db_connection, $query);

    $row = pg_fetch_array($result);
    $ans= $row[0];
    //echo "".$ans."";



    $query2 = "
            select id,name,homeland,Worth
            from fav_team_details($ans)
        ";



    $result2 =  pg_query($db_connection, $query2);




    echo "<table  border='1'  align='center' cellpadding='10' width='60%'>";

    echo "<th>TEAM ID </th>";
    echo "<th>TEAM NAME</th>";
    echo "<th>COUNTRY</th>";  
    echo "<th>NET WORTH</th>";  

    while($row2 = pg_fetch_array($result2)){
        $teamid = $row2['id'];
        $teamname = $row2['name'];
        $coun=$row2['homeland'];
        $worth=$row2[3];
        
        echo "<tr>";

            echo "<td>".$teamid."</td>";
            echo "<td>".$teamname."</td>";
            echo "<td>".$coun."</td>";
            echo "<td>".$worth."</td>";

        echo "</tr>";

    }

    echo "</table>";
    
    ?>
</body>
</html>