<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table ='books';
    protected $primarykey ='id';
    protected $fillable = ['Title','Author','Genre','Height','Publisher'];
    use HasFactory;
}
