<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassifyModel extends Model
{
    protected $table = 'classify';
    protected $primaryKey = 's_id';
    public $timestamps = false;
}
