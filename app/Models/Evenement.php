<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenement';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'startDate'];
}
