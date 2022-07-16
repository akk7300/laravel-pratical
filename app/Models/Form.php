<?php

namespace App\Models;

use App\Models\Field;
use Illuminate\Database\Eloquent\Model;
use App\Http\Foundation\Traits\BootUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory, BootUUID;

    protected $fillable = ['form_name'];

    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
