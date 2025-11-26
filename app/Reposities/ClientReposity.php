<?php

namespace App\Reposities;

use App\Models\Client;
use App\Interfaces\Reposities\ClientReposityInterface;

class ClientReposity implements ClientReposityInterface
{
   public function create(array $data)
   {
      return Client::create($data);
   }
}
