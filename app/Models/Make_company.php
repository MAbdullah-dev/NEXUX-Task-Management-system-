<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make_company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'user_id',
        'description',
        'type',
        'members',
        'country',
        'company_name'
    ];
}
