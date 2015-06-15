<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    /**
     * Fillable fields for a tag
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the articles associated with the given tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

    public function images()
    {
        return $this->belongsToMany('App\Image');
    }

    /**
     * Get a list of article ids associated with the current image
     *
     * @return array
     */
    public function getArticleListAttribute()
    {
        return $this->articles->lists('id');
    }

    /**
     * Get a list of image ids associated with the current image
     *
     * @return array
     */
    public function getImageListAttribute()
    {
        return $this->images->lists('id');
    }
}
