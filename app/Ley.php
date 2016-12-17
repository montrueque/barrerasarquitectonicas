<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ley extends Model
{
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
