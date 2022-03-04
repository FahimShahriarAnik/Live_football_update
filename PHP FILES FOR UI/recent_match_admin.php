<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <h1 align="center">Recent Matches</h1>
    <br>
    <?php
    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $query = '
            select match_id,home_team,away_team,home_goal,away_goal,match_status,cup_id
            from "public".get_recent_matches(10) 
        ';

    $result =  pg_query($db_connection, $query);


    echo "<table  border='1'  align='center' cellpadding='10' width='60%'>";

    echo "<th>MATCHID</th>";
    echo "<th>HOME TEAM</th>";
    echo "<th>AWAY TEAM</th>";  
    echo "<th>HOME GOAL</th>";
    echo "<th>AWAY GOAL</th>";  
    echo "<th>STATUS</th>";  
    echo "<th>CUP ID</th>";  

    while($row = pg_fetch_array($result)){
        $a = $row['match_id'];
        $b = $row['home_team'];
        $c =$row['away_team'];
        $d =$row['home_goal'];
        $e =$row['away_goal'];
        $f =$row['match_status'];
        $g =$row['cup_id'];
        
        echo "<tr>";

            echo "<td>".$a."</td>";
            echo "<td>".$b."</td>";
            echo "<td>".$c."</td>";
            echo "<td>".$d."</td>";
            echo "<td>".$e."</td>";
            echo "<td>".$f."</td>";
            echo "<td>".$g."</td>";


        echo "</tr>";

    }

    echo "</table>";

    ?>
    <br><br>
        <form method="post" action="recent_match_form.php">
         <b>Match ID :&emsp;&emsp;&nbsp;</b><input type="text" name="mid"><br><br>
         <b>Goal Minute:&emsp;</b> <input type="number" name="gmin"><br><br>
         <b>Goal Scorer:&emsp;&nbsp;&nbsp;</b><input type="text" name="gsc"><br><br>
         <b>Goal Assist:&emsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="gasc"><br><br>
         <b>Yellow Card:&emsp;&nbsp;</b><input type="text" name="ycard"><br><br>
         <b>Yellow Minute:&nbsp;</b><input type="number" name="ymin"><br><br>
         <b>Red Card:&emsp;&emsp;&nbsp;</b><input type="text" name="rcard"><br><br>
         <b>Red Minute:&emsp;&nbsp;</b><input type="number" name="rmin"><br><br>
        <input type="submit" value="Submit">
        <input type="reset">
        </form>
    
</body>
</html>