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
            
select *
from public."player"
where salary=
(
select max(salary)
from public."player"
);
        ';



    $result =  pg_query($db_connection, $query);


    echo "<table  border='1'  align='center' cellpadding='10' cellspacing='20' width='60%'>";

    echo "<th>player ID </th>";
    echo "<th>player NAME</th>";
    echo "<th>Player position</th>";
    echo "<th>Player country</th>";  
    echo "<th>Player age</th>";
    echo "<th>Player salary</th>";


    while($row = pg_fetch_array($result)){
        $a = $row['player_id'];
        $b = $row['p_name'];
        $c=$row['position'];
        $d=$row['country'];
        $e=$row['age'];
        $f=$row['salary'];

        
        echo "<tr>";

            echo "<td>".$a."</td>";
            echo "<td>".$b."</td>";
            echo "<td>".$c."</td>";

echo "<td>".$d."</td>";
echo "<td>".$e."</td>";
echo "<td>".$f."</td>";
        echo "</tr>";

    }

    echo "</table>";

    
    ?>
</body> 
</html>