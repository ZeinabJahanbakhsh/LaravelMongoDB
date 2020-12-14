<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'posts';
    protected $table = 'mongocrud';


    protected $fillable = [
        'title','text',/*'author',*/
    ];


}
