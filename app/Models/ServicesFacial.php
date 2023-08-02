<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesFacial extends Model
{
<<<<<<< Updated upstream
	protected $table = 'services';
=======
	protected $table = 'price_facial';
>>>>>>> Stashed changes

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
