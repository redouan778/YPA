<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdw extends Model
{
    protected $fillable = [
        'merk', 'kenteken', 'handelsbenaming','kenteken', 'vervaldatum_apk', 'voertuigsoort'
    ];

    protected $table = 'rdw';


    protected $primaryKey = 'id';
}
