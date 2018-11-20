<?php
    $heading=$_POST["lhead"];
    $content=$_POST["lcontent"];
    $servername = "localhost";
    $username = "editor1";
    $password = "Mvm@Mvm";
    $dbname = "school_mvm";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT INTO latest_news(header, data)VALUES ('$heading','$content')";

    if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/forms.html");
} else {

    echo "record not inserted";
}

mysqli_close($conn);

  ?>
