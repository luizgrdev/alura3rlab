<?php

namespace Alura3rlab\User;

class Customer extends User
{
    public function getAccessLevel() : string
    {
        return "Cliente";
    }
}