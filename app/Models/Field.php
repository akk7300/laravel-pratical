<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{

    protected $fillable = ['form_id','field_name','field_value','field_type'];

    use HasFactory;
}
