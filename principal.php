
<?php
include ('auth.php');
    $heading=$_POST["phead"];
    $content=$_POST["pcontent"];
    $servername = "localhost";
    $username = "mvm_Admin";
    $password = "Mvm@Mvm";
    $dbname = "school_mvm";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT INTO principal_desk(header, data)VALUES ('$heading','$content')";

    if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/forms.html");
} else {

    echo "record not inserted";
}

mysqli_close($conn);

  ?>
