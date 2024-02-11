<?php
// Проверяем, есть ли уже кука с счетчиком
if (!isset($_COOKIE['counter'])) {
    // Если нет, создаем ее и устанавливаем значение 1
    setcookie('counter', 1);
} else {
    // Если есть, увеличиваем ее значение на 1
    $counter = $_COOKIE['counter'] + 1;
    setcookie('counter', $counter);
}

// Выводим значение счетчика
echo $counter;
?>