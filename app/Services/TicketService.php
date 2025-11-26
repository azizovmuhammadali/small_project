<?php

namespace App\Services;

use App\Interfaces\Reposities\TickentReposityInterface;
use App\Interfaces\Services\TicketServiceInterface;

class TicketService implements TicketServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected TickentReposityInterface $ticketRepository)
    {
        //
    }
    public function create( $dto)
    {
      $data = [
        'client_id' => $dto->client_id,
        'theme' => $dto->theme,
        'text' => $dto->text,
        'images' => $dto->images,
      ];
      return $this->ticketRepository->createTicket($data);
    }
    public function statusUpdate($id, $status)
    {
        return $this->ticketRepository->updateStatus($id, $status);
    }
}
