<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message', 'date', 'guia_id', 'turista_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'timestamp',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Guia for the Chat.
     */
    public function guia()
    {
        return $this->belongsTo(\App\Guia::class);
    }


    /**
     * Get the Turista for the Chat.
     */
    public function turista()
    {
        return $this->belongsTo(\App\Turista::class);
    }

}
