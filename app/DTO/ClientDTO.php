<?php

namespace App\DTO;

class ClientDTO
{
    /**
     * Create a new class instance.
     */
    public $name;
    public $email;
    public $phone;
    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
}
