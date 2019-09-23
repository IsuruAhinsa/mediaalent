<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Photo extends Model
{
    use Resizable;

    public static function findById($id)
    {
        return static::where('album_id', $id)->firstOrFail();
    }

    public function album()
    {
        return static::belongsTo(Album::class, 'album_id');
    }
}
