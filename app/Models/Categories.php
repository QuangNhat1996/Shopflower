<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'Categories';

    protected $primaryKey = 'category_id';
    protected $keyType = 'string';
    public $incrementing = false;
    // protected $hidden = ['is_deleted'];
}
