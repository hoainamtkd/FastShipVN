<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term_Taxonomy extends Model
{
	protected $table = 'fs_term_taxonomy';
	public $timestamps = false;
    protected $fillable = [
        'term_id', 'taxonomy', 'description','parent','count','display_position'
    ];
}
