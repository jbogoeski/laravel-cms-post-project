<?php

namespace App;

use App\Post;
use App\User;
use App\Photo;
use App\Comment;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Post extends Model
{

    use Sluggable;
    use SluggableScopeHelpers;


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }

    



    //
    protected $fillable = [
        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body',
    ];

    public function user() {
        return $this->belongsTo(User::class);
        
    }

    public function photo(){
        return $this->belongsTo(Photo::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function photoPlaceholder() {
        return "http://placehold.it/700x200";
    }


}
