<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (mail('mredik200@gmail.com',
                 'Новое письмо',
                 'Ім`я'.$name."\n".
                 'Електронна скринька: '.$email."\n".
                 'Повідомлення: '.$message
        )) {
            echo('Успешно отправлено');
        } else {
            echo('Ошибка');
        }
    }
?>