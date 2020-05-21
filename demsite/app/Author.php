<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function newsbd (){

        return $this->hasMany (Newsbd::class);  //app/Newsbd либо так или сразу обратись к Newsbd::class и еще у автора надо добавить чтото

    }



}
