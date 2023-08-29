<?php

namespace Alura3rlab\Notification;

class EmailNotification implements Notification
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function send(string $title, string $message) : void
    {
        $time = date('d-m-Y h:i');

        echo "[$time] Enviando email" . PHP_EOL;
        echo " - Para: $this->email" . PHP_EOL;
        echo " - Assunto: $title" . PHP_EOL;
        echo " - Mensagem: $message" . PHP_EOL;
        echo PHP_EOL;
    }
}