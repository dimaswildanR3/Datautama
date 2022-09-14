<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productmodel extends Model
{
    protected $table = 'product';
    protected $primarykey = 'id';

    protected $fillable=['name','prince','stock'];
    use HasFactory;
}
