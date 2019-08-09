<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guia extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img', 'first_name','last_name', 'email', 'birthday', 'password', 'gender', 'phone', 'rg', 'cpf', 'has_english', 'has_cnh', 'has_car'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'img' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'birthday' => 'date',
        'password' => 'string',
        'gender' => 'string',
        'phone' => 'string',
        'rg' => 'string',
        'cpf' => 'string',
        'has_english' => 'boolean',
        'has_cnh' => 'boolean',
        'has_car' => 'boolean',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Passeios for the Guia.
     */
    public function passeios()
    {
        return $this->hasMany(\App\Passeio::class);
    }


    /**
     * Get the Chats for the Guia.
     */
    public function chats()
    {
        return $this->hasMany(\App\Chat::class);
    }

}
