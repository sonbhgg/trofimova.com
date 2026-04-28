<?php
function processContactForm($name, $email, $message) {
    if (empty($name) || empty($email) || empty($message)) {
        return ['success' => false, 'error' => 'Заполните все поля'];
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'error' => 'Неверный формат email'];
    }
    
    // Имитация успешной отправки
    return ['success' => true, 'message' => 'Сообщение отправлено!'];
}
?>
