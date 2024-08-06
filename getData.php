<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$database = "hpds_anne";
$databaseServer = "fgserver2.ddns.net";
$databasePort = "3306";
$databaseUser = "root";
$databasePassword = "12qwaszx1qaz2wsx";

$conn = new mysqli($databaseServer, $databaseUser, $databasePassword, $database, $databasePort);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT u.student_id, u.password, s.gender, s.score, s.answer_time, s.answer_date 
        FROM users u
        LEFT JOIN score s ON u.student_id = s.student_id";

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $row['password'] = str_repeat('*', strlen($row['password']));
        $data[] = $row;
    }
}

echo json_encode($data);

$conn->close();
?>
