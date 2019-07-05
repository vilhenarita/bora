<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stars', 'title', 'description', 'turista_id', 'passeio_id'
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
        'stars' => 'integer',
        'title' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Turista for the Feedback.
     */
    public function turista()
    {
        return $this->belongsTo(\App\Turista::class);
    }


    /**
     * Get the Passeio for the Feedback.
     */
    public function passeio()
    {
        return $this->belongsTo(\App\Passeio::class);
    }

}
