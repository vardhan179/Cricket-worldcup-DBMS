<?php
$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
$query1="select * from `team` ";
$result1=mysqli_query($con,$query1);
$query3="select * from `team` ";
$result3=mysqli_query($con,$query3);
$query2="select * from `stadiums`";
$result2=mysqli_query($con,$query2);
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
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
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

<body>
<button><a href="admin1st.html">Back</a></button>
<h3>Add Schedule</h3>
<div class="container">
  <form action="addschedule.php" method="post">
    <label for="team1">Team1 Name</label>
    <select name="team1" id="team1">
        <?php while($row1=mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[2];?></option>
        <?php endwhile;?>
    </select>


    <!-- <label for="team1">Team1 Name</label>
    <input type="text" name="team1" placeholder="e.g., srh.."> -->

    <label for="team2">Team2 Name</label>
    <select name="team2" id="team2">
        <?php while($row1=mysqli_fetch_array($result3)):;?>
        <option><?php echo $row1[2];?></option>
        <?php endwhile;?>
    </select>

    <!-- <label for="team2">Team2 Name</label>
    <input type="text" name="team2" placeholder="e.g.,mi.."> -->

     <label for="date">Date</label>
    <input type="date" name="date" placeholder="Date..">

    <label for="match_no">Match No</label>
    <input type="number" name="match_no" placeholder="Match number..">

    <label for="stadium_name">Stadium Name</label>
    <select name="stadium_name" id="stadium_name">
        <?php while($row1=mysqli_fetch_array($result2)):;?>
        <option><?php echo $row1[0];?></option>
        <?php endwhile;?>
    </select>
    <!-- <label for="stadium_name">Stadium Name</label>
    <input type="text" name="stadium_name" placeholder="chinnaswamy ..."> -->
    <input type="submit" style="float:left;" value="Submit"><button style="float:right;" ><a href="admin.html">Logout</a></button>
  </form>
</div>
</body>
</html>
