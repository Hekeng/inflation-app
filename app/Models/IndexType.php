<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndexType extends Model
{
    protected $fillable = ['slug', 'display_name', 'description', 'source_url', 'is_active'];
}
