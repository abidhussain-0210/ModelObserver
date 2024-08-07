<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];


    public function post(){
        return $this->hasMany(Post::class);
    }

    // protected static function booted() : void{

    //     static::deleted(function($influencer){
    //         $influencer->post()->delete();
        
    //     });

    // }
}
