<?php
$link = mysqli_connect('homework', 'root', '');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Успешно соединились';
mysqli_close($link);
?>