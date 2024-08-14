<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	
	protected $table = 'post_category';
	
	protected $guarded = [
		'updated_at',
		'created_at',
		'views'
	];
  
	protected $fillable = [
		'views',
	];
}
