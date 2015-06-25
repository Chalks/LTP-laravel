<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model {

	protected $guarded = [];
	protected $table = 'leagues';

	public function owner(){
		return $this->belongsTo('App\User', 'user_id');
	}

}
