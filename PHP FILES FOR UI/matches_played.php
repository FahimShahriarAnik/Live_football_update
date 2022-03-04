<!DOCTYPE html>
<html>
<head>
    <title>Match played</title>
</head>
<body>
    <h1 align="center">Mathces played by a team</h1>
    <br>
    <br>
    <br>
    <?php


    $var1 = $_POST['tname'];

    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $query = "
            select date,gameweek,home_team,away_team,home_goal,away_goal,match_status,cup_id
            from public.matches
            where home_team='$var1' or away_team='$var1';
        ";

    $result =  pg_query($db_connection, $query);


    echo "<table  border='1'  align='center' cellpadding='10' width='60%'>";


    echo "<th>DATE</th>";
    echo "<th>GAMEWEEK</th>";
    echo "<th>HOME TEAM</th>";
    echo "<th>AWAY TEAM</th>";  
    echo "<th>HOME GOAL</th>";
    echo "<th>AWAY GOAL</th>";  
    echo "<th>STATUS</th>";  
    echo "<th>CUP ID</th>";  

    while($row = pg_fetch_array($result)){
        
        $a = $row['date'];
        $b = $row['gameweek'];
        $c = $row['home_team'];
        $d =$row['away_team'];
        $e =$row['home_goal'];
        $f =$row['away_goal'];
        $g =$row['match_status'];
        $h =$row['cup_id'];
        
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
    <br><br>
    
</body>
</html>