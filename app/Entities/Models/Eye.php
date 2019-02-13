<?php

namespace App\Entities\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Eye extends Model
{
    /**
     * Handle slugging.
     */
    use Sluggable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'eyes';

    /**
     * Fetch the price this eye has.
     *
     * @return object
     */
    public function price()
    {
        return $this->morphOne(Price::class, 'gene');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['name']
            ]
        ];
    }
}
