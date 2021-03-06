<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{
	function workshops()
	{
		return $this->hasMany(Workshop::class)->where('event_id','>=',0);
	}
}
