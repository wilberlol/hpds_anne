<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HPDS Anne 數據展示</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>HPDS Anne 數據展示</h1>
    <table>
        <thead>
            <tr>
                <th>學號</th>
                <th>密碼</th>
                <th>性別</th>
                <th>分數</th>
                <th>答題時間</th>
                <th>答題日期</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database credentials
            $servername = "fgserver2.ddns.net";
            $username = "root";
            $password = "12qwaszx1qaz2wsx";
            $dbname = "hpds_anne";
            $port = "3306";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname, $port);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from users and score tables
            $sql = "SELECT u.student_id, u.password, s.gender, s.score, s.answer_time, s.answer_date 
                    FROM users u
                    JOIN score s ON u.student_id = s.student_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    $masked_password = str_repeat('*', strlen($row['password']));
                    echo "<tr>
                            <td>{$row['student_id']}</td>
                            <td>{$masked_password}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['score']}</td>
                            <td>{$row['answer_time']}</td>
                            <td>{$row['answer_date']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
