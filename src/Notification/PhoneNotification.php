<?php

namespace Alura3rlab\Notification;

class PhoneNotification implements Notification
{
    private string $phone;

    public function __construct(string $phone)
    {
        $this->phone = $phone;
    }

    public function send(string $title, string $message) : void
    {
        $time = date('d-m-Y h:i');

        echo "[$time] Enviando mensagem" . PHP_EOL;
        echo " - Para: $this->phone" . PHP_EOL;
        echo " - Assunto: $title" . PHP_EOL;
        echo " - Mensagem: $message" . PHP_EOL;
        echo PHP_EOL;
    }
}