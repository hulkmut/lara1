<?php namespace App;

use namespace Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'users';

	protected $fillable = ['surname' , 'name'];

	protected $hidden = ['created_at' , 'updated_at'];

	

}