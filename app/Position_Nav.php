<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position_Nav extends Model
{
	protected $table = 'fs_position_nav';
	public $timestamps = false;
    protected $fillable = [
        'position', 'term_id'
    ];
}
