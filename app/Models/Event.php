<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory ,SoftDeletes,InteractsWithMedia;

    protected $fillable = ['title','description','price','place','date','status','places_number','category_id','acceptation','user_id'];

    public const IS_APPROVED=1;
    public const IS_PENDING=0;
    public const ACCEPTATION_AUTO=1;
    public const ACCEPTATION_MAN=0;
}
