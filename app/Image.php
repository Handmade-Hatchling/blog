<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $fillable = [
        'title',
        'alt_text',
        'path'
    ];

}
