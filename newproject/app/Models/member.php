<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
protected $table ='members';

protected $guarded =['id','created_at','updated_at'];
}
