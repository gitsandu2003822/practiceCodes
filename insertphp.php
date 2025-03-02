<?php

include ("insertphp.php");

if($_SERVER["REQUEST_METHOD"] = "POST")
{
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];

    $dbobject = new Connection("localhost","root","","form");

    $dbobject->getConnection();

    $sql = "INSERT INTO register(firstname,secondname,email,telno,DOB,gender) VALUES(?,?,?,?,?,?)";

    $stmt->$dbobject->runquery($sql);

    if($stmt){

        $stmt->bind_param("ssssss",$firstname,$secondname,$email,$telno,$dob,$gender);
    }
    if($stmt->execute()){
        die("data not inserted");
    }
    else{
        echo "data inserted successfully";
    }
    $stmt->close();
    
    
}



?>