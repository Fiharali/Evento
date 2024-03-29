<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes , InteractsWithMedia;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'deleted_at' => 'datetime',
    ];

    public function  roles(){
        return $this->belongsToMany(Role::class);
    }

    public function  events(){
        return $this->belongsToMany(Event::class,'reservations');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


    public const IS_Admin = 1;
    public const IS_ORGANISATOR=2;
    public const IS_VISITOR=3;
    public const IS_APPROVED=1;
    public const IS_RESTRICT=0;

    public function isAdmin()
    {
        return $this->roles()->where('name', 'admin')->exists();
    }

    public function isOrganisator()
    {
        return $this->roles()->where('name', 'organisator')->exists();
    }


}
