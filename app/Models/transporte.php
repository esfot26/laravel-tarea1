<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporte extends Model
{

    use HaSFactory;

    protected $table= 'transportes';

    protected $fillable=[
     'tipo','matricula','combustion','modelo','marca','capacidad'
    ];
}
