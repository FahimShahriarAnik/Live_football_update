<!DOCTYPE html>
<html>
<head>
    <title>Teams</title>
</head>
<body>
    <h1 align="center">Info of Teams</h1>
    <br>
    <br>
    <br>


    <h3>Watch matches played by a team</h3>
    <form method="post" action="matches_played.php">
         Team Name: <input type="text" name="tname"><br>
    <input type="submit" value="Submit">
    </form>

    <?php
    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");






    $query = '
            select team_id,team_name,country,net_worth 
            from "public".team

        ';



    $result =  pg_query($db_connection, $query);


    echo "<table  border='1'  align='center' cellpadding='10' width='60%'>";

    echo "<th>TEAM ID </th>";
    echo "<th>TEAM NAME</th>";
    echo "<th>COUNTRY</th>";  
    echo "<th>NET WORTH</th>";  

    while($row = pg_fetch_array($result)){
        $teamid = $row['team_id'];
        $teamname = $row['team_name'];
        $coun=$row['country'];
        $worth=$row['net_worth'];
        
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