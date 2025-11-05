<?php
// --- 1. Database connection ---
$servername = "localhost";
$username = "ba367aaa7dac80008fdb8166dd25";      // change if needed
$password = "0690ba36-7aaa-7f98-8000-73a0e9e88b08";          // change if needed
$dbname = "myDatabase"; // change to your DB name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- 2. Query the database ---
$sql = "SELECT value1 FROM itTable";  // Example table and columns
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Data</title>
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
      margin: 20px auto;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 8px 12px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #eef;
    }
  </style>
</head>
<body>

<h2 style="text-align:center;">Database Data</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
  </tr>

  <?php
  // --- 3. Output rows dynamically ---
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<tr id='cell" . $row['id'] . "'>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . htmlspecialchars($row['name']) . "</td>";
          echo "<td>" . htmlspecialchars($row['email']) . "</td>";
          echo "</tr>";
      }
  } else {
      echo "<tr><td colspan='3'>No data found</td></tr>";
  }

  $conn->close();
$ php -t app -S localhost:8080
  ?>
</table>

</body>
</html>

