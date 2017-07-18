<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';
echo "salam heyyyyyyyyyyyyyyyyyyyyyyyyyy";
$API_KEY = '447205620:AAGfcb3s9IXBeY28b3h0cP1zpxjXWh7Wavw';
$BOT_NAME = 'sirjanBot';
$hook_url = 'https://yourdomain/path/to/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
