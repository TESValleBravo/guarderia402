<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table="personas";
   // protected $primary_key="valor de primary key";
    public $timestamps=false;

    protected $fillable=['id_persona',
    'nom',
    'ap',
    'am',
    'fecha_nac'];

    //created_at, updated_at, deleted_at (timestamps) pueden llevar valores null
}
