<?php

namespace App\Models\posting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class berita extends Model
{
    protected $table = 'berita';
    public $timestamps = true;
    use SoftDeletes;
}
