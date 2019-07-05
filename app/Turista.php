<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turista extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img', 'name', 'last_name', 'email', 'birthday', 'password', 'gender', 'phone', 'rg', 'cpf'
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
        'name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'birthday' => 'date',
        'password' => 'string',
        'gender' => 'string',
        'phone' => 'string',
        'rg' => 'string',
        'cpf' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Passeios for the Turista.
     */
    public function passeios()
    {
        return $this->hasMany(\App\Passeio::class);
    }


    /**
     * Get the Contrato_passeios for the Turista.
     */
    public function contratoPasseios()
    {
        return $this->hasMany(\App\Contrato_passeio::class);
    }


    /**
     * Get the Feedbacks for the Turista.
     */
    public function feedbacks()
    {
        return $this->hasMany(\App\Feedback::class);
    }


    /**
     * Get the Chats for the Turista.
     */
    public function chats()
    {
        return $this->hasMany(\App\Chat::class);
    }

}
