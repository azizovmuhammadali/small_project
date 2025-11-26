<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        "client_id","theme","text","status","answered_at",
    ] ;
    public function images()
    {
        return $this->morphMany(Attachment::class, 'attachment');
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
