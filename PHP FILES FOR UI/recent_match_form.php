<!DOCTYPE html>
<html>
<head>
    <title>After Insert</title>
</head>
<body>
    <h1 align="center">AFter insert into match</h1>
    <br>
    <br>
    <br>
<?php
	
	$db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik");


    $var1 = $_POST['mid'];
    $var2 = $_POST['gmin'];
    $var3 = $_POST['gsc'];
    $var4 = $_POST['gasc'];
    $var5 = $_POST['ycard'];
    $var6 = $_POST['ymin'];
    $var7 = $_POST['rcard'];
    $var8 = $_POST['rmin'];

    //echo $var1;
    //echo $var2;
    //echo $var3;
    //echo $var4;

    //concat_ws (', ',goal_min,'')

    $queryyy ="
			
			UPDATE public.matches SET goal_min =concat_ws (', ',goal_min,'$var2'),
            goal_scorer=concat_ws (', ',goal_scorer,'$var3'),
            goal_assist=concat_ws (', ',goal_assist,'$var4'),
            yellow_card=concat_ws (', ',yellow_card,'$var5'),
            yellow_min=concat_ws (', ',yellow_min,'$var6'),
            red_card=concat_ws (', ',red_card,'$var7'),
            red_min=concat_ws (', ',red_min,'$var8')
			WHERE match_id = $var1;
 
        ";    

    $resulteee =  pg_query($db_connection, $queryyy); 



$query ="
		select match_id ,
    date ,
    gameweek,
    home_team ,
    away_team ,
    home_goal ,
    away_goal ,
    match_status ,
    goal_min ,
    goal_scorer ,
    goal_assist ,
    yellow_card,
    yellow_min,
    red_card,
    red_min,
    cup_id
		from public.matches 
		where match_id=$var1;
        ";    
$result =  pg_query($db_connection, $query);


echo "<table  border='1'  align='center' cellpadding='5' width='40%' >";

    echo "<th>match_id</th>";
    echo "<th>date</th>";
    echo "<th>gameweek</th>";  
    echo "<th>home_team</th>";
    echo "<th>away_team</th>";  
    echo "<th>home_goal</th>";  
    echo "<th>away_goal</th>";
    echo "<th>match_status </th>";  
    echo "<th>goal_min</th>";
    echo "<th>goal_scorer</th>";
    echo "<th>goal_assist</th>";
    echo "<th>yellow_card</th>";
    echo "<th>yellow_min</th>";
    echo "<th>red_card</th>";
    echo "<th>red_min</th>";
    echo "<th>cup_id</th>";


    while($row = pg_fetch_array($result)){
        $a = $row['match_id'];
        $b = $row['date'];
        $c =$row['gameweek'];
        $d =$row['home_team'];
        $e =$row['away_team'];
        $f =$row['home_goal'];
        $g =$row['away_goal'];
        $h =$row['match_status'];
        $i =$row['goal_min'];
        $j =$row['goal_scorer'];
        $k =$row['goal_assist'];
        $l =$row['cup_id'];
        $m =$row['yellow_card'];
        $n =$row['yellow_min'];
        $o =$row['red_card'];
        $p =$row['red_min'];
        
        
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
            echo "<td>".$k."</td>";
            echo "<td>".$m."</td>";
            echo "<td>".$n."</td>";
            echo "<td>".$o."</td>";
            echo "<td>".$p."</td>";
            echo "<td>".$l."</td>";


        echo "</tr>";

    }

    echo "</table>"; 
    
?>

</body>
</html>