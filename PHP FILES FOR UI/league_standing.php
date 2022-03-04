<!DOCTYPE html>
<html>
<head>
    <title>League Standings</title>
</head>
<body>
    <h1 align="center">LEADER TABLE</h1>

    <br>
    <br>
    <br>


    <?php

    $var1 = $_POST['fname'];
    //echo "".$var1;



    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");


    $queryeeeeeeeeeee = "
            select cup_name
            from public.cup
            where cup_id=$var1; 
        ";



    $resulteeeeeeeeee =  pg_query($db_connection, $queryeeeeeeeeeee);

    //echo "".$cuppo."  Leader Table";
    $row=pg_fetch_array($resulteeeeeeeeee);

    echo $row[0]."  LEADER TABLE";

    echo "<br>";
    echo "<br>";



    $query = "
            select *
            from generate_league_standings($var1); 
        ";



    $result =  pg_query($db_connection, $query);




    echo "<table  border='1'  align='center' cellpadding='10' width='60%' bgcolor='cyan'>";

    echo "<th>TEAM</th>";
    echo "<th>MATCHES</th>";
    echo "<th>WON</th>";  
    echo "<th>DRAWN</th>";
    echo "<th>LOST</th>";  
    echo "<th>GOALS FOR</th>";  
    echo "<th>GOALS AGAINST</th>";
    echo "<th>POINTS</th>";  

    while($row = pg_fetch_array($result)){
        $a = $row['team'];
        $b = $row['matches'];
        $c =$row['won'];
        $d =$row['drawn'];
        $e =$row['lost'];
        $f =$row['goals_for'];
        $g =$row['goals_against'];
        $h =$row['points'];
        
        echo "<tr>";

            echo "<td>".$a."</td>";
            echo "<td>".$b."</td>";
            echo "<td>".$c."</td>";
            echo "<td>".$d."</td>";
            echo "<td>".$e."</td>";
            echo "<td>".$f."</td>";
            echo "<td>".$g."</td>";
            echo "<td>".$h."</td>";


        echo "</tr>";

    }

    echo "</table>";

    
    ?>


    
</body>
</html>