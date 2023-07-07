<?php

require 'telegram.phar';

use khamdullaevuz\Telegram;

$telegram = new Telegram('5586403525:AAE0DJbw9_q0j1SP86GD-NYQ6K9FhtNeBR0');

$telegram->sendMessage(717404897, [
    'text' => 'Hello World!'
]);