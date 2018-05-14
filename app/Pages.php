<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
	protected $table = 'fs_posts';
    protected $fillable = [
        'post_name', 'post_alias', 'post_content','post_excerpt','post_author','post_status','post_type','created_at','updated_at'
    ];
}
