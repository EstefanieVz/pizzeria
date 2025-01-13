<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','last_name','second_last_name','address_id','email','phone'];

                        //funcion client
    public function address():BelongsTo{
        return $this->belongsTo(Address::class,'address_id');
    }
}

