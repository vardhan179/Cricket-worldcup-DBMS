<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $match_no=$_POST['match_no'];
    $sql="delete from schedules where match_no='$match_no'";
    $sql2="delete from played_in where match_no='$match_no'";
    if((mysqli_query($con,$sql)>0)&&(mysqli_query($con,$sql2)))
    {
    	echo "<script type='text/javascript'>alert('SCHEDULE DELETED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=deleteschedule1.php");
    
}
else{
	echo "error";
	header("refresh: 0.01; url=deleteschedule1.php");
    
}
?>    


