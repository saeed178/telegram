<?php
/**
 * Usage on CLI: $ php broadcast.php [telegram-chat-id] [message]
 */

require __DIR__ . '/vendor/autoload.php';

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;

$API_KEY = '447205620:AAGfcb3s9IXBeY28b3h0cP1zpxjXWh7Wavw';
$BOT_NAME = 'sirjanBot';

$telegram = new Telegram($API_KEY, $BOT_NAME);
$telegram->handle();
//$message = $telegram->getCustomUpdate()->getUpdateId();
//$response = file_get_contents('php://input');
//$update =json_decode(Request::getInput() , true);


// Get the chat id and message text from the CLI parameters.
//$chat_id = $update['message']['from']['id'];
$chat_id = "358589496";
//$message = $update['message']['text'];
//$message = "Welcome to Sirjan";
//$message =$telegram->$update->getMessage();
/*
 if($command == '/start'){
    $message="Hi my dear, saeed7htc@gmail.com";
 }else{
    $message= "دستور شما نا معتبر است";
 }
*/
$message = "I'm telegram bot! My Email: saeed7htc@gmail.com";
    $data = [
        'chat_id' => $chat_id,
        'text'    => $message,
    ];

     $result = Request::sendMessage($data); 