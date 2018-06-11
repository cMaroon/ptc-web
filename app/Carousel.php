<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';
    public $primaryKey = 'id';
    public $timestamp = false;
}
