<?php
$DB_NAME = getenv('DB_NAME');
$DB_HOST = getenv('DB_HOST');
$DB_USER = getenv('DB_USERNAME');
$DB_PASS = getenv('DB_PASSWORD');

$email = $_POST["email"];
echo "Email id $email <br>";
$password = $_POST["password"];
echo "Unhashed password: $password <br>";
$password = hash('sha256',$password);
echo "Password after hash: $password <br>";

$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($connection->connect_error) {
  die("Connecton failed: ".$connection->connect_error);
}
else {
  echo "Connection Successful<br>";
}
$sql = "SELECT email, password FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  // output num rows
  while ($row = $result->fetch_assoc()) {
    // echo "email: " . $row["email"]. " - password: " . $row["password"]."<br>";
    if ($email == $row["email"]) {
      if ($password == $row["password"]) {
        echo "Successfully logged in <br>";
      }
    }
  }
} else {
  echo "0 results found";
}
$connection->close();
?>
