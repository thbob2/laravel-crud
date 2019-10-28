<?php
// the model
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use when having mass assignement
    protected $fillable = ['name'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
