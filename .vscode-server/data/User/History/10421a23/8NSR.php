
<?php
  $counter_file = 'unique_visitors.txt'; // Имя файла для хранения уникальных посетителей
  file_put_contents($counter_file, "0"); // Сброс счетчика до значения 0
  header('Location: index.php'); // Перенаправление на главную страницу после сброса
?>