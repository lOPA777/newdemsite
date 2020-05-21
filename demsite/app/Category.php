<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function show_categories_news()
    {
        return Category::all();

    }

    public function newsbd(){

        return $this->belongsToMany(Newsbd::class);
    }
}
