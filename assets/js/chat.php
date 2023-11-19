<?php
$mysqli = new mysqli("localhost", "root", "", "virtualassistant");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

function getMessages($sender, $receiver, $mysqli) {
    $query = "SELECT * FROM chat WHERE (sender = ? AND receiver = ?) OR (sender = ? AND receiver = ?) ORDER BY timestamp ASC";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssss", $sender, $receiver, $receiver, $sender);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $messages = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $messages;
} else {
    return false;
}

}

function sendMessage($sender, $receiver, $message, $mysqli) {
    $query = "INSERT INTO chat (sender, receiver, message) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sss", $sender, $receiver, $message);
    $stmt->execute();
}


function getUsers($manager,$mysqli) {

    $query = "SELECT DISTINCT sender AS user FROM chat WHERE receiver = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $manager);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row['user'];
        }
        $stmt->close();
        echo json_encode($users);
    } else {
        echo "Error executing query.";
    }

}

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'getMessages') {
        $sender = $_POST['sender'];
        $receiver = $_POST['receiver'];
        $messages = getMessages($sender, $receiver, $mysqli);
        echo json_encode($messages);
    } elseif ($action === 'sendMessage') {
        $sender = $_POST['sender'];
        $receiver = $_POST['receiver'];
        $message = $_POST['message'];
        sendMessage($sender, $receiver, $message, $mysqli);
    }elseif ($action === 'getUsers') {
        $manager = $_POST['manager'];
        getUsers($manager,$mysqli);
    }
}

?>
