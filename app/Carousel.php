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
        $fileNameWithExt = $file->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $fileExt = $file->getClientOriginalExtension();
        $fileNameToStore = md5($fileName.time()).'.'.$fileExt;
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
