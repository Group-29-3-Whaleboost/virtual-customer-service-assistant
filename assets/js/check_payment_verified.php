<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "virtualassistant";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to fetch payment and verified values
    $stmt = $conn->prepare("SELECT payment, verified FROM payment WHERE id = :id");
    $stmt->bindParam(':id', $id);
    
    // Assuming $id is passed from somewhere or hardcoded as the ID you want to check
    $id = $_GET['id']; // Replace this with the specific ID you want to check
    
    $stmt->execute();
    
    // Fetch the payment and verified values
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Close the database connection
    $conn = null;

    // Return the values as a JSON response
    header('Content-Type: application/json');
    echo json_encode($result);
} catch(PDOException $e) {
    // Handle database connection errors
    echo "Error: " . $e->getMessage();
}
?>
