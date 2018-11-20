

<?php

include ('auth.php');
    $date=$_POST["evedate"];
    $heading=$_POST["evehead"];
    $content=$_POST["evedesc"];
    $servername = "localhost";
    $username = "editor1";
    $password = "Mvm@Mvm";
    $dbname = "^school";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $splitDate=explode("-",$date);
    $year=$splitDate[0];
    $mon=$splitDate[1];
    $date1=$splitDate[2];
    $converter=array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"June","07"=>"July","08"=>"Aug","09"=>"Sept","10"=>"Oct","11"=>"Nov","12"=>"Dec");
    $convmonth=$converter[$mon];
    $editDate=$date1."-".$convmonth."-".$year;

    $sql = "INSERT INTO upcoming_events (event_date,header,description) VALUES('$editDate','$heading','$content')";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/forms.html");
} else {

    echo "record not inserted";
}

mysqli_close($conn);

  ?>
