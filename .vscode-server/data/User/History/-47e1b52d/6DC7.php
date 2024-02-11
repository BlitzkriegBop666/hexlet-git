<?php
// Проверяем, есть ли уже кука с счетчиком
if (!isset($_COOKIE['counter'])) {
    // Если нет, создаем ее и устанавливаем значение 1
    setcookie('counter', 1, time() + (60 * 60 * 24 * 30), '/');
} else {
    // Если есть, увеличиваем ее значение на 1
    $counter = $_COOKIE['counter'] + 1;
    setcookie('counter', $counter, time() + (60 * 60 * 24 * 30), '/');
}

// Обнуляем счетчик при закрытии окна
setcookie('counter', 0, time() - 3600, '/');

?>