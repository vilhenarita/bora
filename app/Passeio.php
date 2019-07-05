<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passeio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img', 'name', 'description', 'adress', 'status', 'guia_id', 'turista_id', 'average_rating', 'num_feedback'
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
        'img' => 'string',
        'name' => 'string',
        'adress' => 'string',
        'status' => 'string',
        'average_rating' => 'float',
        'num_feedback' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Contrato_passeios for the Passeio.
     */
    public function contratoPasseios()
    {
        return $this->hasMany(\App\Contrato_passeio::class);
    }


    /**
     * Get the Feedbacks for the Passeio.
     */
    public function feedbacks()
    {
        return $this->hasMany(\App\Feedback::class);
    }


    /**
     * Get the Guia for the Passeio.
     */
    public function guia()
    {
        return $this->belongsTo(\App\Guia::class);
    }


    /**
     * Get the Turista for the Passeio.
     */
    public function turista()
    {
        return $this->belongsTo(\App\Turista::class);
    }

}
