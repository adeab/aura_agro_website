<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($product) { 
             $product->photos()->delete();
        });
    }
}
