<?php
$scode = filter_input(INPUT_POST, 'CODE');
$subject = filter_input(INPUT_POST, 'SUBJECT');
if(!empty($scode)){
if(!empty($subject)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "workshop2db";

//create connection
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        
    if(mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno().') '. mysqli_connect_error());

    }
    else{
        $sql = "INSERT INTO subject (subjectCode,subjectName) values ('$scode','$subject')";
        if($conn->query($sql)){
            echo "RECORED SUCCESFULY";
        }
        else{
            echo "ERROR:" . $sql ."<br>". $conn->error;
        }
        $conn->close();
    }
}


else{
    echo "THERE SHOULD BE NO BLANK SPACE";
    die();
}
}
else{
echo "THERE SHOULD BE NO BLANK SPACE";
die();
}
?>