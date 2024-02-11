<?php
session_start(); // Начинаем сессию

$counter_file = 'unique_visitors.txt'; // Имя файла для хранения уникальных посетителей
$ip = $_SERVER['REMOTE_ADDR']; // Получаем IP-адрес пользователя

if (!isset($_SESSION['visited'])) {
  // Увеличиваем счетчик и помечаем пользователя как посетившего сайт
  $unique_visitors = file_get_contents($counter_file);
  $unique_visitors++; // Увеличиваем счетчик

  file_put_contents($counter_file, $unique_visitors); // Записываем обновленное значение обратно в файл
  $_SESSION['visited'] = true; // Помечаем пользователя как посетившего сайт
} else {
  // Если пользователь уже посещал сайт в текущей сессии, не увеличиваем счетчик
  $unique_visitors = file_get_contents($counter_file);
}

// Проверяем существование переменной $unique_visitors перед использованием
if (!isset($unique_visitors)) {
  $unique_visitors = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['reset_counter'])) {
    // Обработка нажатия на кнопку сброса счетчика
    file_put_contents($counter_file, "0"); // Сброс счетчика до значения 0
    $unique_visitors = 0;
  }
}
?>