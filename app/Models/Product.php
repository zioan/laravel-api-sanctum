<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //if the table is called different than the model singular form
    //protected $table = "my_table";

    //in order to save to db
    protected $fillable= ["name", "slug", "description", "price"];
}
