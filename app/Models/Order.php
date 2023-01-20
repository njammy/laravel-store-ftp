<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Order extends Model
{
    use HasFactory;
    protected $table = "Order";
    protected $fillable = [ "orderNo" ];

    public function clientHasOne(){
        return $this->hasOne(Client::class);
    }
}
