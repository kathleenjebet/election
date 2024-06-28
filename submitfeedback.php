<?php
// Retrieve POST data from the form submission
$ID = $_POST['ID'];
$NAME = $_POST['NAME'];
$EMAIL=$_POST['EMAIL'];
$FEEDBACK=$_POST['FEEDBACK'];
$RATING=$_POST['RATING'];
$SUBDATE = $_POST['SUBDATE'];

// Create a new MySQLi connection to the database
$con = new mysqli("localhost", "root", "", "CAMP_FEEDBACK");

// Check if the connection to the database was successful
if ($con->connect_error) {
    // If the connection failed, stop the script and print the error
    die("Connection failed: " . $con->connect_error);
}

// Prepare the SQL query to insert the data into the TQABLE
$sql = "INSERT INTO FEEDBACK (ID, NAME, EMAIL,FEEDBACK,RATING,SUBDATE) VALUES ('$ID', '$NAME', '$EMAIL','$FEEDBACK','$RATING','$SUBDATE')";

// Execute the SQL query
$result = $con->query($sql);

// Check if the query was successful
// Close the database connection
$con->close();
?>