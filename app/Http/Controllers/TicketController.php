<?php

namespace App\Http\Controllers;

use App\DTO\TicketDTO;
use App\Http\Requests\StatusUpdateRequest;
use App\Http\Requests\TicketStoreRequest;
use App\Http\Resources\TicketResource;
use App\Interfaces\Services\TicketServiceInterface;
use App\Traits\ResponseTrait;

class TicketController extends Controller
{
    use ResponseTrait;
    public function __construct(protected TicketServiceInterface $ticket_service){

    }
    public function create(TicketStoreRequest $ticketStoreRequest){
        $ticketDTO = new TicketDTO($ticketStoreRequest->client_id, $ticketStoreRequest->theme, $ticketStoreRequest->text, $ticketStoreRequest->file('images'));
        $ticket = $this->ticket_service->create($ticketDTO);
        return $this->success(new TicketResource($ticket), 'Ticket created successfully', 201);
    }
    public function statusUpdate(StatusUpdateRequest $request,$id)
    {
        $ticket = $this->ticket_service->statusUpdate($id, $request->status);
        return $this->success(new TicketResource($ticket), 'Ticket status updated successfully', 200);
    }
}
