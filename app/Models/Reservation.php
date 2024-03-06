<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


protected $fillable=['status','user_id','event_id','number_ticket'];
    public const IS_PENDING =0;
    public const IS_APPROVE =1;
}
