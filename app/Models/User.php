<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $fillable = ['name','email','password',];
    protected $hidden = [ 'password','remember_token',];
    protected $casts = ['email_verified_at' => 'datetime',];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

}