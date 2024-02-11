<?php
session_start(); // Начинаем сессию

if (!isset($_SESSION['unique_visitors'])) {
  $_SESSION['unique_visitors'] = 1; // Инициализируем счетчик, если он ещё не существует
} else {
  $_SESSION['unique_visitors']++; // Увеличиваем счетчик
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['reset_counter'])) {
    // Обработка нажатия на кнопку сброса счетчика
    $_SESSION['unique_visitors'] = 0; // Сбрасываем счетчик
  }
}
?>