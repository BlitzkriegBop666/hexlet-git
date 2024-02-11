<?php
  session_start(); // Начинаем сессию

  $counter_file = 'unique_visitors.txt'; // Имя файла для хранения уникальных посетителей
  $ip = $_SERVER['REMOTE_ADDR']; // Получаем IP-адрес пользователя

  if (!isset($_SESSION['visited'])) {
    // Код для подсчета уникальных посетителей на основе IP-адресов
  } else {
    // Если пользователь уже посещал сайт в текущей сессии, не увеличиваем счетчик
    $unique_visitors = file_get_contents($counter_file);
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['reset_counter'])) {
      // Обработка нажатия на кнопку сброса счетчика
      file_put_contents($counter_file, "0"); // Сброс счетчика до значения 0
      $unique_visitors = 0;
    }
  }
?>