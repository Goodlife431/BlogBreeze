<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'excerpt', 'body', 'image_path', 'is_published', 'min_to_read',
    ]; 

    //protected $table = 'posts ';
    
    // protected $primaryKey = 'title';

    // protected $timestamp = false;

    // protected $dateTime = 'U';

    // protected $connection = 'sqlite';

    // protected $attribute = [
    //     'is_published' => true
    // ];
}
