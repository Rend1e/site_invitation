<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "your_token_telegram_bot";

//Сюда вставляем chat_id
$chat_id = "your_chat_id";

//Определяем переменные для передачи данных из нашей формы
$last = trim( $_POST['last']);
$name = ($_POST['name']);
$ans =  ($_POST['ans']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Фамилия:' => $last,
        'придет:' => $ans
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };
echo "Ваш ответ сохранен!";
//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }


?>
