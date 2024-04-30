<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    use HasFactory;

    protected $table = 'contactuses';

    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_subject',
        'contact_message'
    ];
}
