<?php
  session_start(); // Начинаем сессию

  $counter_file = 'unique_visitors.txt'; // Указываем имя файла, в котором будем хранить уникальных посетителей
  $ip = $_SERVER['REMOTE_ADDR']; // Получаем IP-адрес пользователя

  if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = true; // Устанавливаем флаг посещения для текущей сессии
    $unique_visitors = 0;

    // Если файл существует, считываем количество уникальных посетителей из него
    if (file_exists($counter_file)) {
      $unique_visitors = file_get_contents($counter_file); 
    }

    // Проверяем, был ли уже зафиксирован данный IP-адрес
    if (!strpos(file_get_contents($counter_file), $ip)) { 
      $unique_visitors++; // Увеличиваем количество уникальных посетителей
      file_put_contents($counter_file, $ip.PHP_EOL , FILE_APPEND); // Записываем IP-адрес посетителя в файл
    }
    file_put_contents($counter_file, $unique_visitors); // Сохраняем новое количество уникальных посетителей в файле
  } else {
    // Если пользователь уже посещал сайт в текущей сессии, не увеличиваем счетчик
    $unique_visitors = file_get_contents($counter_file);
  }
  
  echo "Количество уникальных посетителей: " . $unique_visitors;
?>