<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name','message'];

    public function list()
    {
      return Message::all();
    }

}
