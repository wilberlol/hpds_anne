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
    <table id="dataTable">
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
        <tbody id="tableBody">
            <!-- 數據將在這裡動態插入 -->
        </tbody>
    </table>

    <script>
        // 從PHP腳本獲取數據並顯示
        fetch('getData.php')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('tableBody');
                data.forEach(item => {
                    const row = tableBody.insertRow();
                    row.insertCell(0).textContent = item.student_id;
                    row.insertCell(1).textContent = item.password; // 已在PHP中轉換為星號
                    row.insertCell(2).textContent = item.gender;
                    row.insertCell(3).textContent = item.score;
                    row.insertCell(4).textContent = item.answer_time;
                    row.insertCell(5).textContent = item.answer_date;
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
