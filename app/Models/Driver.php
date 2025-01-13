<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'name_d','last_name_d','second_last_name_d','salary_d','hiring_date_d'];

}
