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
  background-image: url("img/back6.jpg");
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
                  <li><a href="user1st.html">HOME</a></li></form>
                   <li><a href="schedule_u.php">SCHEDULES</a></li></form>
                  <li><a href="rank_u.php">RANKINGS</a></li></form>
                   <li><a href="stadium_u.php">STADIUMS</a></li></form>
                   <li><a href="cricket_boards_u.php">CRICKET BOARDS</a></li></form>
                    
                 </ul>
<div style="margin-top:10px; style : center" ><table width="fit" align="center" style="background-color:khaki;"><tr style="background-color:darksalmon;"><th><p style="align-content: center;"><h1 style="color:">STADIUMS  </h1></p></th></tr><tr style="background-color:darksalmon;"><th>
	<table align="center">
		<tr >
			<th>Stadium Name</th>
			<th>Capacity</th>
			<th>DOI</th>
			<th>Board Name</th>
			<th>Team's Stadium</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from stadiums";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["stadium_name"]."</th>"."<th>".
			$row["capacity"]."</th><th>".
			$row["DOI"]."</th><th>".
			$row["board_name"]."</th><th>".
			$row["team"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>