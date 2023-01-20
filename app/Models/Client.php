<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Client extends Model
{
    use HasFactory;
    protected $table= "clients";
    protected $fillable= ["name"];

    public function orders(){
        return $this->hasMany(Order::class, "clients_id", "id");
    }

    public function lastestOrder(){
        return $this->hasOne(Order::class, "clients_id", "id")->latestOfMany("created_at");
    }
}
