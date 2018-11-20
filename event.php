include ('auth.php');
<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $date=$_POST["edate"];
        $place=$_POST["place"];
        $heading=$_POST["ehead"];
        $content=$_POST["edesc"];

        /*
         * Insert image data into database
         */

        //DB details
        $dbHost     = "localhost";
        $dbUsername = "editor1";
        $dbPassword ="Mvm@Mvm";
        $dbName     = "school_mvm";

        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }


        //Insert image content into database
        $insert = $db->query("INSERT into events (date,place,img,header,data) VALUES ('$date','$place','$imgContent', '$heading','$content')");
        if($insert){
            echo "File uploaded successfully.";
            header("Location: http://localhost/forms.html");
        }else{
            echo "File upload failed, please try again.";
        }
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
