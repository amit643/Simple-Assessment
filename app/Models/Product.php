<?php

namespace App\Models;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,SoftDeletes,Eloquence;

    protected $fillable =['title','author','genre','description','isbn','image','published','publisher','created_at', 'updated_at','deleted_at'];

    protected $searchableColumns = ['title','author','genre','description','isbn','image','published','publisher'];
}