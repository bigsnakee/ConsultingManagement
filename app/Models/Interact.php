<?php

namespace App\Models;

use App\Enums\MethodEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interact extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname', 'email', 'phone', 'content', 'time',
        'date', 'method', 'results', 'status'
    ];

    protected $casts = [
        'method' => MethodEnum::class,
        'status' => StatusEnum::class
    ];


}
