<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "consumer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$kana = $_POST['kana'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$inquiry = $_POST['inquiry'];
$message = $_POST['message'];
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO consumer (name, kana, email, tel, inquiry, message, date) VALUES ('$name', '$kana', '$email', '$tel', '$inquiry', '$message', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "新しいレコードが作成されました";
} else {
    echo "エラー: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
