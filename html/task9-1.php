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


$sql = "INSERT INTO consumer (お名前, フリガナ, mail, Phone, inpuiry, inquirycont, date) VALUES ('$name', '$kana', '$email', '$tel', '$inquiry', '$message', '$date')";

if ($conn->query($sql) === TRUE) {
    $message = "送信完了しました。";
} else {
    $message = "エラー: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>

    </header>
    <main>
        <section class="con_01">
            <div class="wrapper">
                <h1>送信完了</h1>
                <p><?php echo $message; ?></p>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>
