<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=["title", "body"];
    public function uer(){
        return $this->belongsTo(User::class);
    }    
    
    public function setTitleAttribute($value){
        $this->attribute["title"] = $value;
        $this->attributes["slug"] = Str::slug($value);
    }
    //
}
