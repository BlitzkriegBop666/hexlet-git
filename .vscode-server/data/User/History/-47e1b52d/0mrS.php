<?php
if (!file_exists('counter.txt')) {
    // Если нет, создаем его и записываем в него значение 1
    file_put_contents('counter.txt', '1');
} else {
    // Если есть, читаем из него значение счетчика
    $counter = file_get_contents('counter.txt');
    // Увеличиваем значение счетчика на 1
    $counter++;
    // Записываем новое значение счетчика в файл
    file_put_contents('counter.txt', $counter);
}
?>