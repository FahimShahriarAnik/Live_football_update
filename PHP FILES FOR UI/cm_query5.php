<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <br>
    <br>
    <br>


    <?php
    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $query = '
            
select
a.team_id,a.team_name,(select p_name from public."player" where player_id=b.player_id) as player_name
from public."team" as a
inner join public."team_player" as b on a.team_id=b.team_id
order by a.team_id;
        ';



    $result =  pg_query($db_connection, $query);


    echo "<table  border='1'  align='center' cellpadding='10' width='60%'>";

    echo "<th>TEAM ID </th>";
    echo "<th>TEAM NAME</th>";
    echo "<th>Player NAME</th>";  

    while($row = pg_fetch_array($result)){
        $teamid = $row['team_id'];
        $teamname = $row['team_name'];
        $coun=$row['player_name'];
        
        echo "<tr>";

            echo "<td>".$teamid."</td>";
            echo "<td>".$teamname."</td>";
            echo "<td>".$coun."</td>";

        echo "</tr>";

    }

    echo "</table>";

    
    ?>
</body>
</html>