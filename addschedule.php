<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
    $team1=$_POST['team1'];
    $team2=$_POST['team2'];
    $date=$_POST['date'];
    $match_no=$_POST['match_no'];
    $stadium_name=$_POST['stadium_name'];
    $query="insert into schedules(team1,team2,date,match_no) values('$team1','$team2','$date','$match_no')";
    $query2="insert into played_in(match_no,stadium_name,date) values('$match_no','$stadium_name','$date')";
    if((mysqli_query($con,$query))&&(mysqli_query($con,$query2)))
    {
    	echo "";
      echo "<script type='text/javascript'>alert('SCHEDULE ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addschedulesoption.php");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
header("refresh: 0.01; url=addschedulesoption.php");
mysqli_error($con);
    }
    ?>
    