<?php

namespace App\Services;

use App\Interfaces\Reposities\ClientReposityInterface;
use App\Interfaces\Services\ClientServiceInterface;

class ClientService implements ClientServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected ClientReposityInterface $clientReposityInterface)
    {
        //
    }
    public function registerClient( $dto)
    {
        $data = [
            'name' => $dto->name,
            'email' => $dto->email,
            'phone' => $dto->phone, 
        ];
        return $this->clientReposityInterface->create($data);
    }
}
