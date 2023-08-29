<?php

namespace Alura3rlab\Notification;

interface Notification
{
    public function send(string $title, string $message) : void;
}