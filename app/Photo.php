<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    public static function findById($id)
    {
        return static::where('id', $id)->firstOrFail();
    }
}
