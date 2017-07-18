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

// Get the chat id and message text from the CLI parameters.
//$chat_id = "358589496";
//$message = "salam my dear";

$chat_id = isset($argv[1]) ? $argv[1] : '';
$message = isset($argv[2]) ? $argv[2] : '';

if ($chat_id !== '' && $message !== '') {
    $data = [
        'chat_id' => $chat_id,
        'text'    => $message,
    ];

    $result = Request::sendMessage($data);

}
