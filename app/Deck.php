<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $fillable = [
		'average_rating',
	    'title',
	    'subject',
		'private',
        'user_id',
	];

    public function users()
	{
		return $this->belongsToMany('App\User');
	}

	public function reviews()
	{
		return $this->hasMany('App\Review');
	}

	public function permissions()
	{
		return $this->hasMany('App\Permission');
	}

	public function flashcards()
	{
		return $this->hasMany('App\Flashcard');
	}
}
