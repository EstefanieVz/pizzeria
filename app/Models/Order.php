<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    //
    use HasFactory;
    protected $fillable=[
    'client_id','address_id','pizza_id','order_date','order_total','payment_method'];

                    //funcion client
    public function client():BelongsTo{
        return $this->belongsTo(Client::class,'client_id');
    }

                    //funcion address
    public function address():BelongsTo{
        return $this->belongsTo(Address::class,'address_id');
    }
                    //funcion pizza
    public function pizza():BelongsTo{
        return $this->belongsTo(Pizza::class,'pizza_id');
    }
}
