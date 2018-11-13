<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Event extends Model
{
    //
    use Sluggable, SluggableScopeHelpers;
    use SoftDeletes;

    // Если тут указать поля с датами, то они станут КарбонОбъектами.
    protected $dates = [
        'created_at',
        'updated_at',
        'started_at',
        'deleted_at'
    ];

    // Эти поля досутпны для создания методом Event::create(). А если не указать их здесь, то будет ошибка МассАссигнВалуес.
    protected $fillable = ['name', 'venue', 'city'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getDescriptionAttribute($value)
    {
        $desc = explode(' ', $value);

        return $desc = "TEST";
    }

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('enabled', function (Builder $builder) {
            $builder->where('enabled', '=', 0);
        });
    }

}
