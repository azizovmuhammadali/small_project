<?php

namespace App\DTO;

class TicketDTO
{
    /**
     * Create a new class instance.
     */
    public  $client_id;
    public  $theme;
    public  $text;
    public $images;
    public function __construct($client_id, $theme, $text, $images)
    {
        $this->client_id = $client_id;
        $this->theme = $theme;
        $this->text = $text;
        $this->images = $images;
    }
}
