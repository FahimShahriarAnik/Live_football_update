<!DOCTYPE html>
<html>
<head>
    <title>Leagues</title>
</head>
<body>

    <!--
    <h1 align="center">Leagues and Cups</h1>

    <h3>League Standings</h3>
    <form method="post" action="league_standing.php">
         Cup Id: <input type="number" name="fname"><br>
    <input type="submit" value="Submit">

    <br>
    <br>
    <br>

    --->



    <?php

    /*
    jesob query ekta integer value return kre tader fetch and use
    */
    $db_connection = pg_connect(" host=localhost dbname=postgres user=postgres password=anik ");


    $query2 = '
            select *
            from count_points(10,2)
        ';


    $result2 =  pg_query($db_connection, $query2);

    $row2 = pg_fetch_array($result2);


    $ans2=$row2[0];


    if ($ans2 == 32) {
        # code...
        echo "".$ans2." points";
    }
    else
        echo "hoilo na mamma";



    /*


    $query = '
            select  *
            from "public".cup
        ';



    $result =  pg_query($db_connection, $query);


    echo "<table  border='1'  align='center'>";

    echo "<th>CUP ID </th>";
    echo "<th>CUP NAME</th>";
    echo "<th>TEAMS PLAYING</th>";
    echo "<th>HOST COUNTRY</th>";    

    while($row = pg_fetch_array($result)){
        $cupId = $row['cup_id'];
        $cupName = $row['cup_name'];
        $number_of_clubs=$row['no_of_clubs'];
        $hust=$row['host'];
        
        echo "<tr>";

            echo "<td>".$cupId."</td>";
            echo "<td>".$cupName."</td>";
            echo "<td>".$number_of_clubs."</td>";
            echo "<td>".$hust."</td>";

        echo "</tr>";

    }

    echo "</table>";

    */
    
    ?>
</body>
</html>