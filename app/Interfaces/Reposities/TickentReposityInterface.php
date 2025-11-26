<?php

namespace App\Interfaces\Reposities;

interface TickentReposityInterface
{
    public function createTicket( $data);
    public function updateStatus($id, $status);
}
