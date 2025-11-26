<?php

namespace App\Reposities;

use App\Events\AttachmentEvent;
use App\Models\Ticket;
use App\Interfaces\Reposities\TickentReposityInterface;

class TicketReposity implements TickentReposityInterface
{ 
  
     public function createTicket( $data)
     {
        // Logic to store ticket data in the database
        $ticket = Ticket::create($data);
        event(new AttachmentEvent($data['images'], $ticket->images()));
        return $ticket->load('images','client');
     }
     public function updateStatus($id, $status)
     {
        $ticket = Ticket::findOrFail($id);
            $ticket->status = $status;
            $ticket->answered_at = now();
            $ticket->save();
            return $ticket->load('images','client');
        
     }
}
