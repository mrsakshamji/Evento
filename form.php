<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Getting the form data
    $email = $_POST['email'];
    $mobile = $_POST['mobileNumber'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $emergencyContact = $_POST['emergencyContact'];
    $eventName = $_POST['eventName'];
try{
    // SQL query to insert data into the database
    $sql = "INSERT INTO form (email, mobile_number, first_name, last_name, gender, dob, address, city, state, zip, country, emergency_contact, event_name) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparing the statement
    if ($stmt = $conn->prepare($sql)) {
        // Binding the parameters to the prepared statement
        $stmt->bind_param("sssssssssssss", $email, $mobile, $fname, $lname, $gender, $dob, $address, $city, $state, $zip, $country, $emergencyContact, $eventName);

        // Executing the prepared statement
        if ($stmt->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting data: please contact us at jainesaksham@gmail.com". $stmt->error;
        }

        // Closing the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1062) {
        echo "Error inserting data: please contact us at jainesaksham@gmail.com". $e->getMessage();
    } else {
        echo "Error: " . $e->getMessage();
    }
} finally {
    // Closing the connection
    $conn->close();
}
}
?>
