<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';
echo "heloooooooooooooooooo"
$API_KEY = '447205620:AAGfcb3s9IXBeY28b3h0cP1zpxjXWh7Wavw';
$BOT_NAME = 'sirjanbot';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e;
}
