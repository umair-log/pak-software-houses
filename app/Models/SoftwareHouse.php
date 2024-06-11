<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareHouse extends Model
{
    use HasFactory;
    protected $table = 'software_houses';

    protected $fillable = [
        'name',
        'summary',
        'location',
        'phone',
        'email',
        'website',
        'person',
        'designation',
        'source_link'
    ];
}
