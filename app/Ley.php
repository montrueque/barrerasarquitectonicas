<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ley extends Model
{
    use SoftDeletes;

    protected $table = 'leyes';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
