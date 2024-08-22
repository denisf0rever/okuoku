<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
	
	protected $table = 'user';
	
	protected $fillable = [
		'email',
		'username',
		'password',
		'name',
		'last_name',
		'middle_name',
		'city',
		'middle_name',
		'views',
		'avatar',
		'webp_avatar'
	];
	
	
	protected $appends = ['full_name', 'first_middle_name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
	protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
	
	  
	public function getFullNameAttribute(): string
    {
        return $this->last_name. ' ' . $this->name . ' ' . $this->middle_name;
    }
	
	public function getFirstMiddleNameAttribute(): string
    {
        return $this->name . ' ' . $this->middle_name;
    }
	
	public function role()
    {
        return $this->belongsTo(Role::class);
    }
	
	public function articles()
    {
        return $this->hasMany(Post::class);
    }
}
