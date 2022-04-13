<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

class inventory extends Model
{
    use HasFactory;
   // use Searchable;
    public $table="inventory";
    public $timestamps=false;
}
