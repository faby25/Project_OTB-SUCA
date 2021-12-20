<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $guarded= ['id'];
    //protected $fillable= ['title','excerpt','body'];

    protected $with=['category', 'user'];//todos los post incluiran su categoria y usuario o autor
    protected $guarded=[];

    public function category(){
      return $this->belongsTo(Category::class);
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
}
