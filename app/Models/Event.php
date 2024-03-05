<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','price','place','date','status','places_number','category_id','acceptation'];

    public const IS_APPROVED=1;
    public const IS_PENDING=0;
    public const ACCEPTATION_AUTO=1;
    public const ACCEPTATION_MAN=0;
}
