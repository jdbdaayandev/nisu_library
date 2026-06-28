<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatalogType extends Model
{
    use SoftDeletes;

    protected $fillable = ['catalog_name', 'description'];
    
}
