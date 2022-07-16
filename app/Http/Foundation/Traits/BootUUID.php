<?php

namespace App\Http\Foundation\Traits;

use Illuminate\Support\Str;

trait BootUUID
{
    /**
     * Auto generate uuid for model.
     */
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });
    }
}