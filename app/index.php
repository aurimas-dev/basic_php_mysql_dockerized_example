<h1>Hello World!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php 
$host = 'db';
$user = 'admin';
$pass = 'pass';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
?>