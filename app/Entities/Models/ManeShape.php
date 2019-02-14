<?php

namespace App\Entities\Models;

use App\Entities\Models\Price;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ManeShape extends Model
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
    protected $table = 'mane_shapes';

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
