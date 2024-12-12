<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $code = $_POST['code'];
    $code_value = isset($_POST['code_value']) ? $_POST['code_value'] : 'N/A';
    $message = $_POST['message'];

    $log_entry = "Email: $email\nCode: $code\nCode Value: $code_value\nMessage: $message\n\n";

    $log_file = 'logi/log.txt';

    file_put_contents($log_file, $log_entry, FILE_APPEND);

    echo "Сообщение успешно отправлено! / Message successfully sent!";
} else {
    echo "Неверный метод запроса. / Invalid request method.";
}
?>
