<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'detail_text',
    ];
    
    public function getPublished(){
        return $this->orderBy('id','desc')->paginate(5);
    }
}
