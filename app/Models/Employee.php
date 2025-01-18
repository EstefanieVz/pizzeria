<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'name_e','last_name_e','second_last_name_e','position','salary','hiring_date'];
}
