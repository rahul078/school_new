<?php
    $heading=$_POST["notice"];
    $content=$_POST["ndetails"];
    $servername = "localhost";
    $username = "editor1";
    $password = "Mvm@Mvm";
    $dbname = "school_mvm";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT INTO notice_board(header, data)VALUES ('$heading','$content')";

    if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/forms.html");
} else {

    echo "record not inserted";
}

mysqli_close($conn);

  ?>
