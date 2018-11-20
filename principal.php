
<?php
include ('auth.php');
    $heading=$_POST["phead"];
    $content=$_POST["pcontent"];
    $servername = "localhost";
    $username = "editor1";
    $password = "Mvm@Mvm";
    $dbname = "^school";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT INTO principal_desk(header, data)VALUES ('$heading','$content')";

    if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/forms.html");
} else {

    echo "record not inserted";
}

mysqli_close($conn);

  ?>
