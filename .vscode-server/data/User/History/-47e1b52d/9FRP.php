<?php
session_start(); // Начинаем сессию

if (!isset($_SESSION['page_views'])) {
  $_SESSION['page_views'] = 1; // Инициализируем счетчик, если он ещё не существует
} else {
  $_SESSION['page_views']++; // Увеличиваем счетчик
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['reset_counter'])) {
    // Обработка нажатия на кнопку сброса счетчика
    $_SESSION['page_views'] = 0; // Сбрасываем счетчик
  }
}
?>