<!DOCTYPE html>
<html>
<head>
    <title>Recent Match</title>
</head>
<body>
    <h1 align="center">Recent Matches</h1>
    <br>
    <br>
    <br>
    <?php
    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $query = "
            select match_id,home_team,away_team,home_goal,away_goal,goal_min,goal_scorer,goal_assist,match_status,cup_id
            from public.get_recent_matches(10) 
        ";

    $result =  pg_query($db_connection, $query);


    echo "<table  border='1'  align='center' cellpadding='10' width='60%'>";

    echo "<th>MATCHID</th>";
    echo "<th>HOME TEAM</th>";
    echo "<th>AWAY TEAM</th>";  
    echo "<th>HOME GOAL</th>";
    echo "<th>AWAY GOAL</th>";  
    echo "<th>Goal min</th>";  
    echo "<th>goal scorer</th>";  
    echo "<th>goal assist</th>";  
    echo "<th>STATUS</th>";  
    echo "<th>CUP ID</th>";  

    while($row = pg_fetch_array($result)){
        $a = $row['match_id'];
        $b = $row['home_team'];
        $c =$row['away_team'];
        $d =$row['home_goal'];
        $e =$row['away_goal'];
        $f =$row['goal_min'];
        $g =$row['goal_scorer'];
        $h =$row['goal_assist'];
        $i =$row['match_status'];
        $j =$row['cup_id'];
        
        echo "<tr>";

            echo "<td>".$a."</td>";
            echo "<td>".$b."</td>";
            echo "<td>".$c."</td>";
            echo "<td>".$d."</td>";
            echo "<td>".$e."</td>";
            echo "<td>".$f."</td>";
            echo "<td>".$g."</td>";
            echo "<td>".$h."</td>";

            echo "<td>".$i."</td>";
            echo "<td>".$j."</td>";


        echo "</tr>";

    }

    echo "</table>";

    ?>
    <br><br>
    
</body>
</html>