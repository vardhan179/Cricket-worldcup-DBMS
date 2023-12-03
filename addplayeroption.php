<?php
$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
$query1="select * from `team` ";
$result1=mysqli_query($con,$query1);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=number], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=date], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;;

    margin-top: 6px    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body >
<button><a href="admin1st.html">Back</a></button>
<h3>Add Player</h3>
<div class="container">
  <form action="addplayer.php" method="post">

    <label for="cap_no">Cap Number</label>
    <input type="number" name="cap_no" placeholder="Player Cap Number..">

    <label for="playername">Player Name</label>
    <input type="text" name="playername" placeholder="Enter Player Name..">

    <!-- <label for="name">Team Name</label>
    <input type="text" name="name" placeholder="Team Name.."> -->

    

    <label for="age">age</label>
    <input type="number" name="age" placeholder="Player Age..">

    
     <label for="dob">DOB</label>
    <input type="date" name="dob" placeholder="Player Date of Birth..">

     <label for="runs">Runs</label>
    <input type="number" name="runs" placeholder="Player Runs..">

     <label for="wickets">Wickets</label>
    <input type="number" name="wickets" placeholder="Player Wickets..">

     <label for="type">Type</label>
    <select id="text" name="type" placeholder="player type">
      <option value="Batsman">Batsman</option>
      <option value="Bowler">bowler</option>
      <option value="All rounder">All-Rounder</option>
    </select>
    
    <label for="no_of_matches">No of Matches</label>
    <input type="number" name="no_of_matches" placeholder="Number of Matches Played..">

     <label for="rank">Rank</label>
    <input type="number" name="rank" placeholder="Player rank ..">

     <label for="batting_best">Batting Best</label>
    <input type="text" name="batting_best" placeholder="Player's Batting Best..">

     <label for="bowling_best">Bowling Best</label>
    <input type="text" name="bowling_best" placeholder="Player's Bowling Best..">

     <label for="image">Insert Player's Image here</label>
    <input type="text" name="image" placeholder="(e.g.) p.png">

    <label for="team">Team Name</label>
    <select name="team" id="team" placeholder="">
        <?php while($row1=mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[2];?></option>
        <?php endwhile;?>
    </select>
    <input type="submit" style="float:left;" value="Submit"><button style="float:right;" ><a href="admin.html">Logout</a></button>
  </form>
</div>
</body>
</html>
