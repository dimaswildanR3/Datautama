<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionmodel extends Model
{
    protected $table = 'transaction';
    protected $primarykey = 'id';

    protected $fillable=['status','reference_number','quantity','prince','total_prince','user_id','product_id'];
    use HasFactory;
}
