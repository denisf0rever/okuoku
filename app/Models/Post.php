<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
	
	protected $table = 'post';
	
	protected $guarded = [];	
	
	protected $fillable = [
		'h1',
        'title',
        'subtitle',
        'metadescription',
        'metakey',
        'author_id',
        'reading_time',
        'category',
        'short_text',
        'content',
        'full_text',
        'thumb',
		'views',
	];

}
