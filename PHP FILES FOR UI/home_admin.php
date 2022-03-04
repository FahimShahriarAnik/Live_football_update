<!DOCTYPE html>
<html>
<head >
	<title>Admin</title>

  <style>
  #example1 {
  border: 2px solid black;
  padding: 180px;
  background: url(football.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 14px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  -webkit-transition-duration: 0.8s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;


}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid yellow;
}

.button4:hover {background-color: #FFFF99;
  color:red;
}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>

</head>
<body>
<div id="example1">
<center>
<marquee><h1><font face="verdana"color="white"> <i>ONLINE FOOTBALL LIVE UPDATE</i></font></h1></marquee>
</center>


<br><br><br><br>
<button class="button button1"><a href="cup_details_admin.php" target="_blank"><b>Cup</b></a></button>
<button class="button button2"><a href="http://localhost/project/team_details_admin.php" target="_blank"><b>Teams</b></a></button>
<button class="button button3"><a href="transfer_history_admin.php" target="_blank"><b>Transfer History</b></a></button>
<button class="button button4"><a href="recent_match_admin.php" target="_blank"><b>Recent Matches</b></a></button>

<br><br><br>

<!----
<center>
<br><br><br>
<h2> <font face="calibri" color="maroon">Shovito Barua Soumma(1605066) <br>Fahim Shahriar Anik(1605065) </font> </h2>
</center>
----->
</div>

</body>
</html>