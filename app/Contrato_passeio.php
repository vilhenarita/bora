<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato_passeio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'turista_id', 'observacao', 'passeio_id'
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
        'observacao' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Turista for the Contrato_passeio.
     */
    public function turista()
    {
        return $this->belongsTo(\App\Turista::class);
    }


    /**
     * Get the Passeio for the Contrato_passeio.
     */
    public function passeio()
    {
        return $this->belongsTo(\App\Passeio::class);
    }

}
