<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    /**
     * Fillable fields for a tag
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the staff associated with the given role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function staff()
    {
        return $this->hasMany('App\Staff');
    }
}
