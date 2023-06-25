<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $file = isset($_FILES['file']) ? $_FILES['file'] : null;
    
    function validateEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Пожалуйста, введите валидный e-mail";
            exit;
        }
    }

    function isPngJpg($ext) {
        if (($ext != "png") && ($ext != "jpg")) {
            echo "Пожалуйста, загрузите png или jpg файл";
            exit;
        }
    }

    validateEmail($email);

    // Check if all required fields are filled out
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        echo "Пожалуйста, заполните все обязательные поля"; 
        exit;
    }

    // Save message to txt file
    $filename = date('YmdHis') . '_' . rand(1000,9999) . '.txt';
    $content = "Имя пользователя: $name\nEmail: $email\nСообщение: $message\n";

    // If the file exists, add the directory to the txt file
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        isPngJpg($ext);
        $new_filename = date('YmdHis') . '_' . rand(1000,9999) . '.' . $ext;
        $file_path = str_replace('\\', '/', __DIR__) . "/" . $new_filename;
        move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
        $content .= "Путь к файлу: $file_path\n";
    }   
    file_put_contents($filename, $content);

    echo "Ваше сообщение успешно отправлено";
}