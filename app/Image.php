<?php namespace App;

use File;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image as ImageIntervention;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Image extends Model
{
	protected $fillable = [
        'title',
        'caption',
        'alt_text',
        'filename',
        'thumb_name'
    ];

    /**
     * @param array $input
     * @param UploadedFile $file
     * @return mixed
     */
    public static function createUpload(array $input, UploadedFile $file)
    {
        $imageFile = static::make($file);

        $attributes = [
            'title' => $input['title'],
            'caption' => $input['caption'],
            'alt_text' => $input['alt_text'],
            'filename' => $imageFile['full']->basename,
            'thumb_name' => $imageFile['thumb']->basename
        ];

        return parent::create($attributes);
    }

    public function updateUpload(array $input, UploadedFile $file = null)
    {
        $attributes = [];

        foreach ($input as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $attributes[$key] = $value;
            }
        }

        if (! is_null($file)) {
            File::delete([
                public_path() . "/images/{$this->filename}",
                public_path() . "/images/{$this->thumb_name}"
            ]);

            $imageFile = static::make($file);

            $attributes = array_merge($attributes, [
                'filename' => $imageFile['full']->basename,
                'thumb_name' => $imageFile['thumb']->basename
            ]);
        }
        return parent::update($attributes);
    }

    /**
     * Get the articles associated with the given image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the current image
     *
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }

    /**
     * Get a list of the article ids associated with the current image
     *
     * @return array
     */
    public function getArticleListAttribute()
    {
        return $this->articles->lists('id');
    }

    public static function make(UploadedFile $image)
    {
        $path = public_path() . '/images/';

        File::exists($path) or File::makeDirectory($path);

        $images = [];

        $name = time() . '-' . $image->getClientOriginalName();

        $images['full'] = ImageIntervention::make($image->getRealPath())
                    ->resize(1200, 1000, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->save($path . $name);

        $images['thumb'] = ImageIntervention::make($image->getRealPath())
                    ->fit(200, 150, function ($constraint) {
                        $constraint->upsize();
                    })->save($path . 'tn-' . $name);

        return $images;
    }
}
