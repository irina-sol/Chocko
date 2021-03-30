<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //use HasFactory;
	//public $fillable = ['name', 'body', 'picture', 'user_id', 'status'];
	
	protected $table = 'portfolio';
    protected $fillable = ['name', 'body', 'picture', 'user_id', 'status'];
}
