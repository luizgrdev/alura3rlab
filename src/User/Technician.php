<?php

namespace Alura3rlab\User;

class Technician extends User
{
    public function getAccessLevel() : string
    {
        return "Técnico";
    }
}