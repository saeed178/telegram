<?php
/**
 * Usage on CLI: $ php broadcast.php [telegram-chat-id] [message]
 */

require __DIR__ . '/vendor/autoload.php';

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;

$API_KEY = '447205620:AAGfcb3s9IXBeY28b3h0cP1zpxjXWh7Wavw';
$BOT_NAME = 'sirjanBot';

$response = file_get_contents('php://input');
$update = json_decode($response, true);

$telegram = new Telegram($API_KEY, $BOT_NAME);

// Get the chat id and message text from the CLI parameters.
$chat_id = $update['message']['from']['id'];
$command = $update['message']['text'];
//$message = "Welcome to Sirjan";

 if($command == '/start'){
    $message= "سلام، به ربات ما خوش آمدید"."<br>"."saeeed7htc@gmail.com";
 }else{
    $message= "دستور شما نا معتبر است";
 }

    $data = [
        'chat_id' => $chat_id,
        'text'    => $message,
    ];

     $result = Request::sendMessage($data); 
