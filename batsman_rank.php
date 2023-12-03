<html>
<style >
	table{
		border: 0px solid black;
	}
	tr{
		border: 1px solid black;
		background-color:cornflowerblue;
	}
	th{
		border: 1px solid black;
		color: black;
	}
    .menu {
  list-style:none;
  margin: 1px auto;

  width: 800px;
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content;
}
.menu > li {
  background: #34495e;
  float: left;
  position: relative;
  -webkit-transform: skewX(25deg);
}
.menu a {
  display: block;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  font-family: Arial, Helvetica;
  font-size: 14px;
}
.menu li:hover {
  background: #e74c3c;
}
.menu > li > a {
  -webkit-transform: skewX(-25deg);
  padding: 1em 2em;
}
/* Dropdown */
 .submenu {
  position: absolute;
  width: 200px;
  left: 50%;
  margin-left: -100px;
  -webkit-transform: skewX(-25deg);
  -webkit-transform-origin: left top;
}
.submenu li {
  background-color: #34495e;
  position: relative;
  overflow: hidden;
}
.submenu > li > a {
  padding: 1em 2em;
}
.submenu > li::after {
  content:'';
  position: absolute;
  top: -125%;
  height: 100%;
  width: 100%;
  box-shadow: 0 0 50px rgba(0, 0, 0, .9);
}
/* Odd stuff */
.submenu > li:nth-child(odd) {
  -webkit-transform: skewX(-25deg) translateX(0);
}
.submenu > li:nth-child(odd) > a {
  -webkit-transform: skewX(25deg);
}
.submenu > li:nth-child(odd)::after {
  right: -50%;
  -webkit-transform: skewX(-25deg) rotate(3deg);
}
/* Even stuff */
.submenu > li:nth-child(even) {
  -webkit-transform: skewX(25deg) translateX(0);
}
.submenu > li:nth-child(even) > a {
  -webkit-transform: skewX(-25deg);
}
.submenu > li:nth-child(even)::after {
  left: -50%;
  -webkit-transform: skewX(25deg) rotate(3deg);
}
/* Show dropdown */
.submenu, .submenu li {
  opacity: 0;
  visibility: hidden;
}
.submenu li {
  transition: .2s ease -webkit-transform;
} */
.menu > li:hover .submenu, .menu > li:hover .submenu li {
  opacity: 1;
  visibility: visible;
}
.menu > li:hover .submenu li:nth-child(even) {
  -webkit-transform: skewX(25deg) translateX(15px);
}
.menu > li:hover .submenu li:nth-child(odd) {
  -webkit-transform: skewX(-25deg) translateX(-15px);
}
.background-image{
  background-image: url("img/back5.jpg");
  background-size: cover;
  background-image: no-repeat;
}
</style>
<head>
	<title>RANKS</title>
</head>
<body class="background-image">
	
    <p align="center"><img src="img/icclogotran.png" style="width: 300px;padding-bottom: 0px;height: 150px;"></p>
	<ul class="menu">
                  <li><a href="admin1st.html">HOME</a></li></form>
                   <li><a href="schedule.php">SCHEDULES</a></li></form>
                  <li><a href="rank.php">RANKINGS</a></li></form>
                   <li><a href="stadium.php">STADIUMS</a></li></form>
                   <li><a href="cricket_boards.php">CRICKET BOARDS</a></li></form>
                   
                </form>     
                 </ul>
<br></br>
<br></br>
<ul class="menu" >
                  <li style="background-color:darkred"><a href="team_rank.php">TEAM</a></li></form>
                   <li style="background-color:darkred"><a href="batsman_rank.php">BATSMAN</a></li></form>
                  <li style="background-color:darkred;"><a href="bowler_rank.php">BOWLER</a></li></form>
                  <li style="background-color:darkred;"><a href="all_rounder_rank.php">ALL ROUNDER</a></li></form>
                   
                </form>     
                 </ul>
	
    <br></br>
	
    <div style="margin-top:10px; style : center" ><table width="fit" align="center" style="background-color:khaki;"><tr style="background-color:darksalmon;"><th><p style="align-content: center;"><h1 style="color:">BATSMAN RANKING</h1></p></th></tr><tr style="background-color:darksalmon;"><th>
	<table align="center">
		<tr >
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Runs</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from player  where type='batsman' order by runs desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["teamname"]."</th><th>".
			$row["runs"]."</th></tr>";
			}
		}?></table></th><th></th></tr></table>
<br></br>
<br></br>
<table style="vertical-align: text-top;"><tr><th>
	<p align="center" style="width: 100%;padding-right: 100px;"><div style="align-content: center;background-color: ">
	<form action="pupdate.php" method="POST">
	ENTER PLAYERNAME    <input type="text" name="name" placeholder="sehwag"><br>
	ENTER RUNS        <input type="number" name="runs" placeholder="211"><br>
	ENTER WICKETS        <input type="number" name="wickets" placeholder="23"><br>
	ENTER NUMBER_OF_MATCHES        <input type="number" name="no_of_matches" placeholder="176"><br>
	
	<button>UPDATE</button></form>
</div></p></th></tr></table></th></tr></table>


	

</body>
</html>