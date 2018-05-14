<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
	protected $table = 'fs_term';
	public $timestamps = false;
    protected $fillable = [
        'name', 'slug', 'term_group'
    ];
}
