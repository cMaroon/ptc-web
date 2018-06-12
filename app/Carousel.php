<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Carousel extends Model
{
    protected $table = 'carousel';
    public $primaryKey = 'id';
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'sort_order',
    ];

    public static function fileToStore($file, $path)
    {
        $fileNameToStore = md5(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time()).'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/'.$path, $fileNameToStore);

        return $fileNameToStore;
    }

    public static function fileToDelete($file, $path)
    {
        if (!empty($file)) {
            return Storage::delete('public/'.$path.'/'.$file);
        }

        return false;
    }
}
