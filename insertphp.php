<?php
include("connection.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];

    $dbobject = new Connection("localhost", "root", "", "from");

    
    $dbobject->getConnection();

   
     $sql = "INSERT INTO newreg(firstname, secondname, email, telno, DOB, gender) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $dbobject->runquery($sql);

    
    if ($stmt) {
        
        $stmt->bind_param("ssssss", $firstname, $secondname, $email, $telno, $dob, $gender);

      
        if ($stmt->execute()) {
            echo "User inserted successfully! User ID: " . $stmt->insert_id;
        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Error in preparing the query.";
    }
}
?>
