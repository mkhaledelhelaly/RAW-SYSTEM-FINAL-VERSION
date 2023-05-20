<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['cf-name'];
    $email = $_POST['cf-email'];
    $phone = $_POST['cf-phone'];
    $message = $_POST['cf-message'];

    // Process the data (you can customize this part based on your requirements)
    
    // Example: Store the data in a database
    // Assuming you have a database connection already established
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $database = "your_database";

    // Create a new connection
    //$conn = new mysqli($servername, $username, $password, $database);
    $conn= new mysqli("localhost","root","","my"); 
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the data to insert into the database
    $stmt = $conn->prepare("INSERT INTO users (id, name, email,  phone ,message)");
    $stmt->bind_param("ssii", $name, $email, $phone, $message);
    
    // Execute the statement
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect or display a success message
    // Example: Redirect to a thank-you page
    header("Location:index.php");
    exit();
}
?>