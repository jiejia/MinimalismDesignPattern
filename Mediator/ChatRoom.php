<?php
namespace Mediator;

class ChatRoom
{
    public static function  showMessage(User $user, String $message)
    {
        echo date('Y-m-d H:i:s') . " [" . $user->getName() . "] " . $message . "\n";
    }
}