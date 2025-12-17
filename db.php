<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "backend_task";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات");
}

echo "تم الاتصال بقاعدة البيانات بنجاح";
?>
