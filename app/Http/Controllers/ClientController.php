<?php

namespace App\Http\Controllers;

use App\DTO\ClientDTO;
use App\Http\Requests\ClientRegisterRequest;
use App\Http\Resources\ClientResource;
use App\Interfaces\Services\ClientServiceInterface;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    use ResponseTrait;
    public function __construct(protected ClientServiceInterface $clientservice){}
    public function register(ClientRegisterRequest $clientRegisterRequest){
    $clientDTO = new ClientDTO($clientRegisterRequest->name,$clientRegisterRequest->email,$clientRegisterRequest->phone);
    $client =  $this->clientservice->registerClient($clientDTO);
    return $this->success(new ClientResource($client), 'Client registered successfully', 201);
    }
}
