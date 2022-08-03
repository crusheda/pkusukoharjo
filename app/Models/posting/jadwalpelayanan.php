<?php

namespace App\Models\posting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class jadwalpelayanan extends Model
{
    protected $table = 'jadwalpelayanan';
    public $timestamps = true;
    use SoftDeletes;
}
