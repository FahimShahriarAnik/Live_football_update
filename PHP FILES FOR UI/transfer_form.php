<!DOCTYPE html>
<html>
<head>
	<title>Transfer New</title>
</head>
<body>
<h1 align="center">Transfer History</h1>
    <br>
    <br>
    <br>
    <?php
    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");

    $var1 = $_POST['p_name'];
   // echo $var1;
    $var2 = $_POST['p_team'];
   // echo $var2;

    $queryyy = "
       
            UPDATE public.team_player SET team_id = '$var2',start_date=CURRENT_DATE
			WHERE player_id = '$var1';
        ";



    $resultee =  pg_query($db_connection, $queryyy);

    $query = '
            select player_name,old_team,new_team,start_date,end_date
            from "public".transfer_history
        ';



    $result =  pg_query($db_connection, $query);




    echo "<table  border='1'  align='center' cellpadding='10' width='60%'>";

    echo "<th>PLAYER NAME</th>";
    echo "<th>OLD TEAM</th>";
    echo "<th>NEW TEAM</th>";  
    echo "<th>STARTED</th>";
    echo "<th>ENDED</th>";  

    while($row = pg_fetch_array($result)){
        $a = $row['player_name'];
        $b = $row['old_team'];
        $c =$row['new_team'];
        $d =$row['start_date'];
        $e =$row['end_date'];
        
        echo "<tr>";

            echo "<td>".$a."</td>";
            echo "<td>".$b."</td>";
            echo "<td>".$c."</td>";
            echo "<td>".$d."</td>";
            echo "<td>".$e."</td>";

        echo "</tr>";

    }

    echo "</table>";

    
    ?>

</body>
</html>