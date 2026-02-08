<?php
if ($_POST['capcha'] != 56) {
  // header — Отправляет необработанный HTTP-заголовок
  // https://www.php.net/manual/ru/function.header.php
  header('location: index.php'); /* Перенаправление браузера */
  exit; /* Исключить выполнение кода после перенаправления .*/
}

if ($_POST['subject'] == 1) {
  $subject = 'Вопрос по уроку';
} elseif ($_POST['subject'] == 2) {
  $subject = 'Личный вопрос';
} elseif ($_POST['subject'] == 3) {
  $subject = 'Благодарность';
} else {
  // если пользователь ничего не выбрал и оставил все по умолчанию:
  $subject = 'Вопрос по уроку';
}

$to = "tutevgen@gmail.com";
$from = trim($_POST['email']);

// предотвратим спецсимволы от пользователя:
$message = htmlspecialchars($_POST['message']);

$message = urldecode($message);
// Функция urldecode декодирует в строке последовательности %##, которые сформировали через механизм процентного кодирования. Символ '+' декодируется в символ пробела.

// удаление лишних пробелов
$message = trim($message);

// в итоге нашей textarea мы обезопасили максимально возможным способом

$headers = "From: $from" . "\r\n" .
  "Reply-To: $from" . "\r\n" .
  "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
  echo 'Письмо отправлено';
} else {
  echo 'Письмо не отправлено';
}

// phpversion — Получает текущую версию PHP
// https://www.php.net/manual/ru/function.phpversion.php