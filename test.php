<?php

/**
 * Telegram bot for receiving notifications on GitHub commits
 * Author: Jacopo Jannone (https://www.jacopojannone.com)
 * 
 * HMAC and headers verification code, including the `array_matches`
 * functions, were taken from the following Gist and not written by me:
 * https://gist.github.com/jplitza/88d64ce351d38c2f4198
 */

define('BOT_TOKEN', '6985057514:AAEzwOhX7SojItClMFUlUIFWYeZlo1NmmkU'); // Telegram bot token goes here

$botToken = BOT_TOKEN;
$website = "https://api.telegram.org/bot" . $botToken;

$update = file_get_contents("php://input");
$updateArray = json_decode($update, TRUE);

if (isset($updateArray["message"])) {
    $chatId = $updateArray["message"]["chat"]["id"];
    $message = $updateArray["message"]["text"];

    switch ($message) {
        case "/start":
            sendMessage($chatId, "Halo! Saya adalah bot Anda.");
            break;
        default:
            sendMessage($chatId, "Anda mengirim pesan: " . $message);
            break;
    }
}

function sendMessage($chatId, $message)
{
    global $website;
    $url = $website . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message);
    file_get_contents($url);
}
