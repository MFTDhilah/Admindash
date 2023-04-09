<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesHair extends Model
{
	protected $table = 'price_hair';

	protected $fillable = ['nama_layanan', 'user_id', 'slug', 'content', 'waktu', 'harga' , 'status'];

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