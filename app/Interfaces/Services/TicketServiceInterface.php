<?php

namespace App\Interfaces\Services;

interface TicketServiceInterface
{
    public function create( $dto);
    public function statusUpdate($id, $status);
}
