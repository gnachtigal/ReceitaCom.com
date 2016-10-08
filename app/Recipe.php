<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients(){
    	
    	return $this->belongsToMany('App\Ingredient','recipe_ingredients','recipe_id','ingredient_id');
    }
}
