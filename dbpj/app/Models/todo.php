<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;

    protected $table = 'todo';
    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'required|min:0|max:5',
    );

    public function getData(){
        return $this->content;
    }
}
