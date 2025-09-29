<?php
$conn = new mysqli("localhost", "root", "", "portfolio_db");
$result = $conn->query("SELECT * FROM messages");


echo "<h2>Messages Received</h2>";
echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['message'] . "</td>
          </tr>";
}

echo "</table>";

$conn->close();
?>
