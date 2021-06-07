<?php

namespace App\Models;
use App\Traits\Uuids;

class Example extends Model
{
    use Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email'
    ];
    
}
