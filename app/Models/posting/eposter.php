<?php

namespace App\Models\posting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class eposter extends Model
{
    protected $table = 'eposter';
    public $timestamps = true;
    use SoftDeletes;
}
