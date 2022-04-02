<html>
    <title>database</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<body>


<?php
$servername = "localhost";
$username = "User1";
$password = "root123";
$dbname = "Students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM StudentInfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>
  <thead>
      <tr>
          <th>id</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Option</th>
      </tr>
  </thead><tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td> " . $row["firstame"]. " </td><td>" . $row["lastname"].  " </td><td> ". $row["email"]. " </td><td> ". $row["adress"]. "</td>
    <td> <a href=deletedata.php?userid=". $row["id"]."><button> Delete </button>  </a>  <a href=/". $row["id"]."><button> Edit </button></a></td></tr>";
  }
  echo "</tbody></table>";
} else {
  echo "0 results";
}
$conn->close();
?>
<script>    

</script>

</body>

</html>