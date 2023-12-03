<!DOCTYPE html>
<html>
<style >
	table{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
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
  background-image: url("img/back4.jpg");
  background-size: cover;
  background-image: no-repeat;
}

</style>
<head><p>
	<title>SCHEDULES</title>
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
	<!-- <button style="background-color:darkgreen"><a href="admin1st.html" style="color:deepskyblue">Back</a></button> -->
	 <div style="margin-top:115px; style : center" >
	<table align="center">
		<tr>
		<th>Match Number</th>
			<th>Date</th>
			<th>Team1</th>
			<th>Flag1</th>
			<th>Team2</th>
			<th>Flag2</th>
			
			<th>VENUE</th>
		
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		//played_in p where  s.date=p.date and s.team1=p.team1
		$query="select s.match_no , s.date , s.team1 ,t1.flag as flag1,s.team2 , t2.flag as flag2 , p.stadium_name  from schedules s ,played_in p ,team t1 , team t2 where s.match_no=p.match_no and s.team1=t1.name and s.team2=t2.name order by s.date";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".
			$row["match_no"]."</th>
			<th>".$row["date"]."</th><th>".
			$row["team1"]."</th>
			<th height="."100%"."><img src=".$row["flag1"]." width="."100px"."></th><th>".
			$row["team2"]."</th>
			<th height="."100%"."><img src=".$row["flag2"]." width="."100px"."></th>
			<th>".$row["stadium_name"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>

	</table></div>
<br><br>
		<table><form action="tt.php" method="post" style="align-content: center;"  >
			 
			<tr><label for="match_no" >Enter the matchnumber to reteive players</label></tr>
   <tr> <input type="number" name="match_no" placeholder="enter the match number"  style="width: 300;height: 25;"></tr>
			
           <tr> <input type="submit" style="float:center;" value="Submit"></tr>
           
		 </form></table> 
<br></br>
		 


<ul class="menu" style="margin-bottom: 200px;background-position: bottom;">
                  <li><a href="addplayeroption.php">ADD PLAYER</a></li>
                   <li><a href="addschedulesoption.php">ADD SCHEDULE</a></li>
                  <li><a href="addstadiumoption.php">ADD STADIUMS</a></li>
                   <li><a href="deleteplayer1.php">DELETE PLAYER</a></li>
                   <li><a href="deleteschedule1.php">DELETE SCHEDULE</a></li>
                    <li><a href="deletestadium1.php">DELETE STADIUM</a></li>

                 
                    <li style="float: right;"><a href="admin.html">LOGOUT</a></button1></li>
                  <li style="float: right;"></li>
                </ul>



</body>
</html>