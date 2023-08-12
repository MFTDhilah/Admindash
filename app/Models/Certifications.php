<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certifications extends Model
{
	protected $table = 'certifications';

	protected $fillable = ['name', 'user_id', 'slug', 'content', 'kategori', 'status', 'image']; 

	public function getUser(){
		$user = User::findorfail($this->user_id);
		if($user){
			return $user;
		}
		else{
			return NULL;
		}		
	}   
}
