<?php
$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
$query1="select * from `cricket_boards` ";
$result1=mysqli_query($con,$query1);
// $query1="select * from `cricket_boards` ";
$result2=mysqli_query($con,$query1);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=txt], select, textarea {
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
<h3>Add Stadium</h3>

<div class="container">
  <form action="addstadium.php" method="post">


    <label for="stadium_name">Stadium Name</label>
    <input type="txt" name="stadium_name" placeholder="Enter Stadium Name..">
    <label for="board_name">Board Name</label>
    <select name="board_name" id="board_name">
        <?php while($row1=mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[0];?></option>
        <?php endwhile;?>
    </select>
    <!-- <label for="board_name">Board Name</label>
    <input type="txt" name="board_name" placeholder="Board Name.."> -->
    <label for="team">Team Name</label>
    <select name="team" id="team">
         <!-- <option>---</option> -->
        <?php while($row1=mysqli_fetch_array($result2)):;?>
        <option><?php echo $row1[2];?></option>
        <?php endwhile;?>
    </select>
     <!-- <label for="team">Team</label>
    <input type="txt" name="team" placeholder="Team.."> -->

    <label for="capacity">Capacity</label>
    <input type="number" name="capacity" placeholder="Capacity of Stadium..">

    
    <input type="submit" style="float:left;" value="Submit"><button style="float:right;" ><a href="admin.html">Logout</a></button>
  
  </form>
  </form>
</div>

</body>
</html>
