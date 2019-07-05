<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passeio extends Model
{
    protected $fillable = [
        'img', 'name', 'description', 'adress', 'status'
    ];

    protected $guarded = [
        'guia_id', 'turista_id', 'average_rating', 'num_feedback'
    ];

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


    public function contratoPasseios()
    {
        return $this->hasMany(\App\Contrato_passeio::class);
    }


    public function feedbacks()
    {
        return $this->hasMany(\App\Feedback::class);
    }


    public function guia()
    {
        return $this->belongsTo(\App\Guia::class);
    }


    public function turista()
    {
        return $this->belongsTo(\App\Turista::class);
    }

}
